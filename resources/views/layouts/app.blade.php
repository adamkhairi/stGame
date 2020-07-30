<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="js/navbar.js'" defer></script>
    <script src="https://kit.fontawesome.com/8ac7442e81.js" crossorigin="anonymous"></script>
    <script src="carosel/owl.carousel.min.js" defer></script>


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="carousel/owl.theme.default.min.css">
</head>
<body class="">
@include('layouts.includes.navBar')
{{--<div id="app">--}}



    @yield('content')
    @yield('section1')
    @yield('section2')
    @yield('section3')



{{--</div>--}}
@include('layouts.includes.footer')
</body>
</html>
