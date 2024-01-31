<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link href="https://fonts.googleapis.com/css2?family=Play&family=Roboto+Slab:wght@200&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css2/peliculas.css')}}">
</head>
<body>
    <h1 id="tittle">Actualizar Película</h1>


    <div class="cont-edit">
        <div class="cards-edit">

            <div style="background-color: {{ $daticos->ColorF }}; color: {{ $daticos->ColorT }};" class="card" id="card-change">
                
                <div class="cont-card">
                    <label for="input-file">
                        <img src="{{ isset($daticos->Poster)?asset('storage').'/'. $daticos->Poster:'' }}" id="imagenVacia" alt="imagenVacia" />
                    </label>  
                    <div class="card-info">
                        <h4 style="color: {{ $daticos->ColorTN }} ;" id="nom">{{ $daticos->Nombre }}</h4>
                        <p>Estreno: <span id="feccha">{{ $daticos->Festreno }}</span></p>
                        <p>Genero: <span id="genero-change">{{ $daticos->Genero }}</span></p>
                        <p>Director: <span id="director-change">{{ $daticos->Director }}</span></p>
                    </div>
                </div>
            </div>

            <div id="overlay-edit" style="background-color: {{ $daticos->ColorFDT }} ; color: {{ $daticos->ColorT }};" class="overlay">
                <h3><span style="color: {{ $daticos->ColorTN }} ;" class="ti">Sinopsis:</span></h3>
                <p id="p-change">{{ $daticos->Sinopsis }}</p>
                <p style="color: {{ $daticos->ColorTN }} ;" id="span-overlay">$<span id="v">{{ $daticos->vBoleta }}</span></p>
                <button style="background-color: {{ $daticos->ColorBTN }} ;" id="buy" class="btn-buy"><b style="color: {{ $daticos->ColorTN }} ;">Comprar</b></button>
            </div>


        </div>

        <div class="form-edicion">

            <form id="formulario" action="{{ url('/Pelis/'.$daticos->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field("PATCH") }}
                @include("Peliculas.formPeli")
            </form>

        </div>

    </div>

    <script src="{{ asset('js2/dinamic.js') }}"></script>
</body>
</html>