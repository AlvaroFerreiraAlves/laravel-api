<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LightBox</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>
<a href="#" onclick="finalizar()" class="btn btn-success">Finalizar</a>
{{csrf_field()}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script>
    function finalizar() {

        $.ajax({
           url: "pagseguro-lightbox-code",
           method: "POST",
           data: {_token: $('input[name=_token]').val()}
        }).done(function (code) {
            PagSeguroLightbox(code);
        });
        return false;
    }
</script>


<script src="{{config('pagseguro.url_lightbox_sandbox')}}"></script>


</body>
</html>