<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transparente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>
<form id="form">
    {{csrf_field()}}


</form>

<a href="#" onclick="setSessionId()" class="btn btn-success">Pagar com boleto</a>

<div class="payments-methods"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{config('pagseguro.url_transparente_js_sandbox')}}"></script>

<script>

    function setSessionId() {
        var data = $("#form").serialize();
        $.ajax({
            url: "pagseguro-transparente-code",
            method: "POST",
            data: data
        }).done(function (data) {
            PagSeguroDirectPayment.setSessionId(data);

           // getPaymentMethods();

            paymentBillet();
        }).fail(function () {
            alert("Fail request");
        });
        return false;
    }

    function getPaymentMethods() {
        PagSeguroDirectPayment.getPaymentMethods({
            success: function (response) {
                if (response.error == false) {
                    $.each(response.paymentMethods, function (key, value) {
                        $('.payments-methods').append(key + "<br>");
                    })

                }
            },
            error: function (response) {
                console.log(response);
            }/*,
            complete: function (response) {
                console.log(response);
            }*/
        });
    }
    
    function paymentBillet() {
        var sendHash = PagSeguroDirectPayment.getSenderHash();
        var data = $("#form").serialize()+"&sendHash="+sendHash;
        $.ajax({
            url: "pagseguro-billet",
            method: "POST",
            data: data
        }).done(function (data) {
            console.log(data);
        }).fail(function () {
            console.log(data);
        });
    }

</script>

</body>
</html>