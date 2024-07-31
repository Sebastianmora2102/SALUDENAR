<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SALUDENAR</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            font-family: 'Figtree', sans-serif;
            background: url('{{ asset('img/fondo.png') }}') no-repeat center center fixed;
            background-size: 100% 100%;
        }

        .center-element {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin-top: 0;
        }

        .title {
            font-size: 10rem;
            font-weight: 1000;
            font-family: trade Verdana, Geneva, Tahoma, sans-serif, sans-serif; 
            color: #023abb;
            animation: fadeInUp 1s ease;
            margin-bottom: 20px;
        }

        .img3 {
            width: 200px;
            height: auto;
            margin-bottom: 10px;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .options {
            display: flex;
            justify-content: center;
            /* Puedes probar display: flex en lugar de justify-content */
        }

        .options a {
            margin: 0 10px;
            font-size: 1.2rem;
            color: #048608;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="center-element">
        <img src="{{ asset('img/img3.png')}}" class="img3">
        <div class="title">
            SALUDENAR
        </div>
        <div class="options">
            @if (Route::has('login'))
            <a href="{{route('Admin.index')}}" class="">Inicio</a>
            @endif
            <br>
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
            @endif

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        </div>
    </div>
</body>
</html>





