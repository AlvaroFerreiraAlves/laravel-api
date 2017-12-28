<html lang="en">
<head>

    <title>{{$title or 'Store PagSeguro'}}</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{--Fonts Icons--}}
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
    {{--Google fonts--}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">

</head>
<body>
@include('store.layouts.header')

<div class="container">
    @yield('content')
</div>

{{--Jquery--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>