<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Películas</title>
    <link rel="stylesheet" href="{{asset('css2/peliculas.css')}}">
    <link rel="stylesheet" href="{{asset('css2/prod.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Play&family=Roboto+Slab:wght@200&display=swap"
    rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
    <h1 id="tittle">🎬Productoras🎬</h1>
<div class="cont">

        <a href="Prodc/create">
            <div class="card cardCreate">
                <i class="bi bi-cloud-plus-fill"></i>
            </div>
        </a>


    @foreach ($pr as $p)
    <div style="background-color: {{ $p->ColorF }}; color: {{ $p->ColorT }} ;" class="card">
       
        <div class="cont-card">
            <img src="{{ asset('storage').'/'.$p->Logo }}" alt="Pelicula 1">
            <div style="background-color: {{ $p->ColorF }} ; color: {{ $p->ColorT}};" class="card-info">
                <h4><span> {{ $p->Nombre }}</span></h4>
                <p>{{ $p->Descripcion }}</p>
            </div>
        </div>


        <form id="delete" action="{{ url('Prodc/'.$p->id) }}" method="POST">
            @csrf
            {{ method_field("DELETE") }}
           <button onclick="confirm('¿Seguro de que quieres borrar?')" type="submit"><i class="bi bi-trash3-fill"></i></button>
           <a href="{{ url('Prodc/'.$p->id.'/edit') }}"><i class="bi bi-pencil-square"></i></a>
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