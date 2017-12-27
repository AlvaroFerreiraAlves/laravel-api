<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Card</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>


<div class="container">

    <form class="form-horizontal" id="form">
        {{csrf_field()}};
        <fieldset>

            <!-- Form Name -->
            <legend>Pagamento com cartão de crédito</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cardNumber">Card Number:</label>
                <div class="col-md-4">
                    <input id="cardNumber" name="cardNumber" type="text" placeholder="" class="form-control input-md"
                           required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cardExpiryMonth">card Expiry Month:</label>
                <div class="col-md-4">
                    <input id="cardExpiryMonth" name="cardExpiryMonth" type="text" placeholder=""
                           class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cardExpiryYear">card Expiry Year:</label>
                <div class="col-md-4">
                    <input id="cardExpiryYear" name="cardExpiryYear" type="text" placeholder=""
                           class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cardCVV">cardCVV:</label>
                <div class="col-md-4">
                    <input id="cardCVV" name="cardCVV" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <input type="hidden" id="cardName" name="cardName">
            <input type="hidden" id="cardToken" name="cardToken">

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="enviar"></label>
                <div class="col-md-4">
                    <button type="submit" id="enviar" name="enviar" class="btn btn-primary btn-buy">Enviar</button>
                </div>
            </div>

        </fieldset>
    </form>

    <div class="preloader" style="display: none;">Preloader....</div>

</div>
{{--Jquery--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{config('pagseguro.url_transparente_js_sandbox')}}"></script>

<script>

    $(function () {
        setSessionId();

        $("#form").submit(function () {

            getBrand();

            startPreloader("Enviando dados...");

            return false;
        });
    });

    function setSessionId() {
        var data = $("#form").serialize();
        $.ajax({
            url: "pagseguro-transparente-code",
            method: "POST",
            data: data,
            beforeSend: startPreloader("carregando a sessão")
        }).done(function (data) {
            PagSeguroDirectPayment.setSessionId(data);
        }).fail(function () {
            alert("Fail request");
        }).always(function () {
            endPreloader();
        });

    }

    function getBrand() {
        PagSeguroDirectPayment.getBrand({

            cardBin: $("input[name=cardNumber]").val().replace(/ /g, ''),

            success: function (response) {
                console.log("success brand");
                console.log(response);

                $('input[name=cardName]').val(response.brand.name);
                createCredCardToken();
            },
            error: function (response) {
                console.log("error brand");
                console.log(response);
            },
            complete: function (response) {
                console.log("success brand");
               // console.log(response);
            }
        });
    }
    
    function createCredCardToken() {
        PagSeguroDirectPayment.createCardToken({
            cardNumber:  $("input[name=cardNumber]").val().replace(/ /g, ''),
            brand: $("input[name=cardName]").val(),
            cvv: $("input[name=cardCVV]").val(),
            expirationMonth: $("input[name=cardExpiryMonth]").val(),
            expirationYear:  $("input[name=cardExpiryYear]").val(),

            success: function (response) {
                console.log("success createCredCardToken");
                console.log(response);

                $('input[name=cardToken]').val(response.card.token);

                createTransactionCard();

            },
            error: function (response) {
                console.log("error createCredCardToken");
                console.log(response);
            },
            complete: function (response) {
                console.log("success createCredCardToken");
                // console.log(response);
                endPreloader();
            }

        });
    }
    
    function createTransactionCard() {
        var sendHash = PagSeguroDirectPayment.getSenderHash();
        var data = $("#form").serialize()+"&senderHash="+sendHash;
        $.ajax({
            url: "pagseguro-transparente-card-transaction",
            method: "POST",
            data: data,
            beforeSend: startPreloader("Realizando o pagamento com o cartão")
        }).done(function (data) {
            alert(data);
        }).fail(function () {
            alert("Fail request");
        }).always(function () {
            endPreloader();
        });
    }

    function startPreloader(msgPreloader) {
        if(msgPreloader!="")
            $('.preloader').html(msgPreloader);
        $(".preloader").show();
        $(".btn-buy").addClass('disabled');
    }

    function endPreloader() {
        $(".preloader").hide();
        $(".btn-buy").removeClass('disabled');
    }
</script>

</body>
</html>