<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Películas</title>
    <link href="https://fonts.googleapis.com/css2?family=Play&family=Roboto+Slab:wght@200&display=swap"
    rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css2/peliculas.css')}}">
</head>

<body>
    <h1 id="tittle">🍿Cartelera🍿</h1>
<div class="cont">

        <a href="Pelis/create">
            <div class="card cardCreate">
                <i class="bi bi-cloud-plus-fill"></i>
            </div>
        </a>


    @foreach ($peliculas as $p)
    <div style="background-color: {{ $p->ColorF }}; color: {{ $p->ColorT }} ;" class="card">
       
        <div class="cont-card">
            <img src="{{ asset('storage').'/'.$p->Poster }}" alt="Pelicula 1">
            <div class="card-info">
                <h4>{{ $p->Nombre }}</h4>
                <p>Genero: {{ $p->Genero }}</p>
                <p>Director: {{ $p->Director }}</p>
                <p>Estreno: {{ $p->Festreno }}</p>
            </div>
        </div>
        <div style="background-color: {{ $p->ColorFDT }} ;" class="overlay">
            <h3 style="color: {{ $p->ColorTN }} ;">Sinopsis</h3>
            <p>{{ $p->Sinopsis}}</p>
            <span style="color: {{ $p->ColorTN }} ;" id="span-overlay">${{ $p->vBoleta }}</span>
            <button class="btn-buy" style="background-color: {{ $p->ColorBTN }};color: {{ $p->ColorT }}"><b>Comprar</b></button>
        </div>

        <form id="delete" action="{{ url('Pelis/'.$p->id) }}" method="POST">
            @csrf
            {{ method_field("DELETE") }}
           <button onclick="return confirm('¿Seguro de que quieres borrar?')" type="submit"><i class="bi bi-trash3-fill"></i></button>
           <a href="{{ url('Pelis/'.$p->id.'/edit') }}"><i class="bi bi-pencil-square"></i></a>
        </form> 
    </div>

    @endforeach

</div>

<footer>
    <a class="a1" href="/">Regresar</a>
    <a href="Dire">Vista Directores</a>
    <a class="a1" href="Prodc">Vista Productoras</a>
</footer>
    
    
</body>
</html>
