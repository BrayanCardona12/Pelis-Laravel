<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Play&family=Roboto+Slab:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <!-- Styles -->
       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <link rel="stylesheet" href="{{ asset('css2/home.css') }}">
    </head>
    
    <body>
        

            @if (Route::has('login'))
                <div class="cont-menu">
                    <h2 id="tittle">🎞️Cine🎞️</h2>
                    <div id="cont2">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="bi bi-person-fill"></i></a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="bi bi-person-circle"></i></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><i class="bi bi-person-fill-add"></i></a>
                        @endif
                    @endauth
                </div>
                </div>
            @endif

                <div class="cont-main">
                    <div class="cont-s">

                        <div class="users" id="user2">
                            <h1 id="vvv">Vistas</h1>
                            <p>(Si eres administrador, inicia sesión y modifica lo correspondiente)</p>
                            <div class="cont-access">
                                <a href="Pelis" class="cc1">📽️</a>
                                <a href="Dire" class="cc2">🎬</a>
                                <a href="Prodc" class="cc3">🎞️</a>
                            </div>
    
    
                        </div>
                    </div>

                </div>
    </body>
</html>
