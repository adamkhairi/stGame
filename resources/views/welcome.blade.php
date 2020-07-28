<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/navbar.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <script src="https://kit.fontawesome.com/8ac7442e81.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/main.css') }}" rel="stylesheet">
</head>
<body class="h-screen antialiased leading-none">
<div class="flex flex-col">

    @include('layouts.includes.navBar')

    <section
        class="flex md:flex-row justify-around items-center p-6 text-center flex-col-reverse container h-screen mx-auto">
        <div class="flex flex-col items-center">
            <div class="my-4">
                <h1 class="text-4xl font-bold mb-6 font-title">Commencer</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, quis.</p>
            </div>
            <div class="my-4">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" id="loginBtnHero" class="btn-gardiant px-4 py-1 m-2 rounded">Se
                        connecter</a>


                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" id="registerBtn" class="btn-gardiant px-4 py-1 m-2 rounded">Inscrivez-vous</a>

                @endif
            </div>

        </div>
        <div>
            <img src="/img/banner_img.png" alt="">
        </div>

    </section>
</div>
</body>
</html>
