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
    <link rel="stylesheet" href="{{asset('css2/prod.css')}}">
    <style>
        form {
            width: 100px;
        }
    </style>
</head>
<body>
    <h1 id="tittle">Crear Productora</h1>


    <div class="cont-edit">
        <div class="cards-edit">

            <div class="card" id="card-change">
                
                <div class="cont-card">
                    <label for="input-file">
                        <img src="https://img.freepik.com/vector-gratis/vector-tipografia-estilo-basura-trazo-pincel-signo-interrogacion_53876-140880.jpg?w=2000" id="imagenVacia" alt="imagenVacia">
                    </label>  
                    <div class="card-info">
                        <h4><span id="nom">(Nombre)</span></h4>
                        <p><span style="text-align: justify;" id="texttt">....</span></p>
                    </div>
                </div>
                
            </div>
            
        </div>

        <div class="form-edicion">

            <form id="formulario" action="{{ url('Prodc') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include("Productoras.formP")


                <div class="cont-p2">

                    <div class="color-text">
                        <label class="l" for="colorF-change">Color de Fondo</label>
                        <input  oninput="cambio5()" value="{{ isset($daticos->ColorF)?$daticos->ColorF:'' }}" id="ColorF" type="color" name="ColorF">
                    </div>

                    <div class="color-text">
                        <label class="l" for="colorT-change">Color de Texto</label>
                        <input oninput="cambio5()" id="ColorT" value="{{ isset($daticos->ColorT)?$daticos->ColorT:'' }}" type="color" name="ColorT">
                    </div>


                            
                </div>
                <div id="btn-cont">
                    <input id="btnEnviar" type="submit" value="Enviar">
                </div>

            </form>



        </div>

    </div>

    <script src="{{ asset('js2/dinamic.js') }}"></script>
    <script src="{{ asset('js2/dinamic3.js') }}"></script>
</body>
</html>