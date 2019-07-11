<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            <div>
                Bem vindo ao Coffee Tips
            </div>
            <img class="gif" src="{{ asset('images/coffee.gif') }}" />
        </div>
    </div>
</div>
</body>
</html>
