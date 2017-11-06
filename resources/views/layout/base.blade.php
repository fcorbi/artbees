@push('css-head')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"
          media="all"/>
    <link href="{{ asset("css/app.css") }}" rel="stylesheet" type="text/css" media="all"/>
@endpush

@push('js-head')
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endpush

<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artbees - Test</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset("/images/artbees-favicon.ico") }}"/>
    @stack('css-head')
    @stack('js-head')
</head>
<body class="container">
@yield('header')
@yield('content')
@yield('footer')
@stack('css-bottom')
@stack('js-bottom')
</body>
</html>