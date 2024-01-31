                <div class="cont-p1">
                    <div class="input-form">
                        <input oninput="cambio1()"  id="input-file" type="file" name="Foto" >
                        <input oninput="cambio4()" value="{{ isset($daticos->Nombre)?$daticos->Nombre:'' }}" id="nom-change" required type="text" name="Nombre" maxlength="30" placeholder="Nombre">
                        <input oninput="cambio4()" value="{{ isset($daticos->Edad)?$daticos->Edad:'' }}" required min="12" max="130" type="number" id="Edad" name="Edad" placeholder="Edad">
                        <input oninput="cambio4()" value="{{ isset($daticos->Telefono)?$daticos->Telefono:'' }}" id="g" min="1000" max="10000000000000000" required type="number" name="Telefono" placeholder="Telefono">
                        <input oninput="cambio4()" value="{{ isset($daticos->Correo)?$daticos->Correo:'' }}" id="Correo"  required type="email" name="Correo" placeholder="Correo">

                    </div>
                </div>


                <div class="cont-p2">

                   
                    <div class="color-text">
                        <label for="ColorTN-change">Color de Fondo</label>
                        <input oninput="cambio4()" value="{{ isset($daticos->ColorF)?$daticos->ColorF:'' }}" id="ColorF" type="color" name="ColorF">
                    </div>

                    <div class="color-text">
                        <label for="ColorFDT-change">Color de <br> Texto</label>
                        <input oninput="cambio4()" value="{{ isset($daticos->ColorT)?$daticos->ColorT:'' }}" id="ColorT" type="color" name="ColorT">
                    </div>

                            
                </div>
                <div id="btn-cont">
                    <input id="btnEnviar" type="submit" value="Enviar">
                </div>


           