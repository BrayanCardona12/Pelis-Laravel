@extends('layouts.app')

@section('content')


<head>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Play&family=Roboto+Slab:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css2/home.css') }}">
    <style>
        body {
            color: black;
        }

        .cont-s {
            width: 52%;
            height: 69%;
        }

        .cont-access .cc1::before, .cont-access .cc2::before, .cont-access .cc3::before {
            font-size: 16px;
            width: 93%;
            
        }

    </style>
</head>

<body>
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


@endsection
