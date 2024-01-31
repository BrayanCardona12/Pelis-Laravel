<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directores</title>
    <link href="https://fonts.googleapis.com/css2?family=Play&family=Roboto+Slab:wght@200&display=swap"
    rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset("css2/peliculas.css") }}">
    <link rel="stylesheet" href="{{ asset("css2/direc.css") }}">
    <style>
        .cards-edit {
            border: none;
        }

        .cardCreate {
            padding: 40px;
        }

        
    </style>
</head>
<body>
    <h1 id="tittle">🎥Directores🎥</h1>
    <div class="cont">

        <a href="Dire/create">
            <div class="card cardCreate">
                <i class="bi bi-cloud-plus-fill"></i>
            </div>
        </a>
        @foreach ($dire  as $c )
            
        
            <div style="background-color: {{ $c->ColorF }}; color: {{ $c->ColorT }};" class="card" id="card-change">
                <div class="cont-card">
                    <label id="labell" for="input-file">
                        <img src="{{ asset('storage').'/'.$c->Foto }}" alt="Foto Director de Cine">
                    </label>  
                    <div class="card-info">
                        <h4><span id="nom">{{ $c->Nombre }}</span></h4>
                        <p>Edad: <span id="feccha">{{ $c->Edad }}</span> años</p>
                        <p>Telefono: <span id="telf-change">{{ $c->Telefono }}</span></p>
                        <p>Correo: <span id="director-change">{{ $c->Correo }}</span></p>
                    </div>
                </div>  
                <form id="delete" action="{{ url('Dire/'.$c->id) }}" method="POST">
                    @csrf
                    {{ method_field("DELETE") }}
                   <button onclick="confirm('¿Seguro de que quieres borrar?')" type="submit"><i class="bi bi-trash3-fill"></i></button>
                   <a href="{{ url('Dire/'.$c->id.'/edit') }}"><i class="bi bi-pencil-square"></i></a>
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