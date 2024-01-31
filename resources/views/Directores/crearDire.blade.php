<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear</title>
    <link rel="stylesheet" href="{{ asset("css2/peliculas.css") }}">
    <link rel="stylesheet" href="{{ asset("css2/direc.css") }}">
    <style>
        
    </style>
</head>
<body>
    <h1 id="tittle">Crear Director</h1>

    <div class="cont-edit">
        <div class="cards-edit">

            <div class="card" id="card-change">
                
                <div class="cont-card">
                    <label id="labell" for="input-file">
                        <img src="https://img.freepik.com/vector-gratis/vector-tipografia-estilo-basura-trazo-pincel-signo-interrogacion_53876-140880.jpg?w=2000" id="imagenVacia" alt="imagenVacia">
                    </label>  
                    <div class="card-info">
                        <h4><span id="nom">Steven Spielberg</span></h4>
                        <p id="cocc">Edad: <span id="aa">34</span> años</p>
                        <p>Telefono: <span id="telf-change">3214223303</span></p>
                        <p>Correo: <span id="director-change">Director@gmail.com</span></p>
                    </div>
                </div>  
            </div>
        </div>

        <div class="form-edicion">

            <form id="formulario" action="{{ url('Dire') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @include("Directores.formDirec")

            </form>



        </div>

    </div>

    <script src="{{ asset('js2/dinamic.js') }}"></script>
    <script src="{{ asset('js2/dinamic2.js') }}"></script>
</body>
</html>