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
    <style>
        form {
            width: 100px;
        }
    </style>
</head>
<body>
    <h1 id="tittle">{{ $tt }} Película</h1>


    <div class="cont-edit">
        <div class="cards-edit">

            <div class="card" id="card-change">
                
                <div class="cont-card">
                    <label for="input-file">
                        <img src="https://img.freepik.com/vector-gratis/vector-tipografia-estilo-basura-trazo-pincel-signo-interrogacion_53876-140880.jpg?w=2000" id="imagenVacia" alt="imagenVacia">
                    </label>  
                    <div class="card-info">
                        <h4><span id="nom">(Nombre)</span></h4>
                        <p>Estreno: <span id="feccha">dd/mm/aaaa</span></p>
                        <p>Genero: <span id="genero-change">....</span></p>
                        <p>Director: <span id="director-change">....</span></p>
                    </div>
                </div>
                
            </div>

            <div id="overlay-edit" class="overlay">
                <h3><span id="ti">Sinopsis:</span></h3>
                <p id="p-change">.....</p>
                <p id="span-overlay">$<span id="v">$$$$</span></p>
                <button id="buy" class="btn-buy"><b>Comprar</b></button>
            </div>

            
        </div>

        <div class="form-edicion">

            <form id="formulario" action="{{ url('Pelis') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include("Peliculas.formPeli")












            </form>



        </div>

    </div>

    <script src="{{ asset('js2/dinamic.js') }}"></script>
</body>
</html>