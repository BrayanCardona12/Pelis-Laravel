<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
    <link rel="stylesheet" href="{{ asset("css2/peliculas.css") }}">
    <link rel="stylesheet" href="{{ asset("css2/direc.css") }}">
    <style>
        
    </style>
</head>
<body>
    <h1 id="tittle">Actualizar Director</h1>

    <div class="cont-edit">
        <div class="cards-edit">

            <div style="background-color: {{ $daticos->ColorF }}; color: {{ $daticos->ColorT }};" class="card" id="card-change">
                
                <div class="cont-card">
                    <label id="labell" for="input-file">
                        <img src="{{ isset($daticos->Foto)?asset('storage').'/'. $daticos->Foto:'' }}" id="imagenVacia" alt="imagenVacia">
                    </label>  
                    <div class="card-info">
                        <h4><span id="nom">{{ $daticos->Nombre }}</span></h4>
                        <p id="cocc">Edad: <span id="aa">{{ $daticos->Edad }}</span> años</p>
                        <p>Telefono: <span id="telf-change">{{ $daticos->Telefono }}</span></p>
                        <p>Correo: <span id="director-change">{{ $daticos->Correo }}</span></p>
                    </div>
                </div>  
            </div>
        </div>

        <div class="form-edicion">

            <form id="formulario" action="{{ url('Dire/'.$daticos->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field("PATCH") }}
                @include("Directores.formDirec")

            </form>



        </div>

    </div>

    <script src="{{ asset('js2/dinamic.js') }}"></script>
    <script src="{{ asset('js2/dinamic2.js') }}"></script>
</body>
</html>