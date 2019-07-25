<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Coffee Tips</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/main_page.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
            CoffeeTips
        </a>
        <div class="top-right collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="nav-item nav-link active" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                        <a class="nav-item nav-link active" href="{{ route('register') }}">{{ __('Cadastro') }}</a>
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="m-b-md">
            <div>
                <h1 class="title">Bem vindo ao Coffee Tips</h1>                
            </div>
            <img class="gif" src="{{ asset('images/coffee.gif') }}" />
        </div>
    </div>
</div>
</body>
</html>
