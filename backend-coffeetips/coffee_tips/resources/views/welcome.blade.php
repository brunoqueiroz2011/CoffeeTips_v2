<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Coffee Tips</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #EBCD84;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }


        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            color: #BF6C3B;
        }

        .m-b-md {
            margin-bottom: 30px;
            margin-top: 5%;
        }
        .gif{
            width: 40%;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: -26px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        @media (max-width:776px){
            .title {
            font-size: 50px;
            color: #BF6C3B;
            }
            .gif{
                width: 100%;
            }
            .top-right {
            position: absolute;
            right: 80px;
            top: -26px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a class="btn" href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
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
