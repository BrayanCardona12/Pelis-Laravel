                <div class="cont-p1">
                    <div class="input-form">
                        <input oninput="cambio1()"  id="input-file" type="file" name="Poster" >
                        <input oninput="cambio()" value="{{ isset($daticos->Nombre)?$daticos->Nombre:'' }}" id="nom-change" required type="text" name="Nombre" placeholder="Nombre">
                        <input oninput="cambio()" value="{{ isset($daticos->Festreno)?$daticos->Festreno:'' }}" id="fecha-change" required type="date" name="Festreno">
                        <input oninput="cambio()" value="{{ isset($daticos->Genero)?$daticos->Genero:'' }}" id="g" maxlength="20" required type="text" name="Genero" placeholder="Genero">
                        <input oninput="cambio()" value="{{ isset($daticos->Director)?$daticos->Director:'' }}" id="cambioDire" maxlength="19" required type="text" name="Director" placeholder="Director">
                        <input oninput="cambio()" value="{{ isset($daticos->vBoleta)?$daticos->vBoleta:'' }}" required min="1000" max="100000" type="number" id="vBoleta" name="vBoleta" placeholder="Valor de la boleta">
                    </div>


                    <div class="textarea">
                        <textarea oninput="cambio()" value="ffgf" maxlength="345" required cols="31" rows="13" id="sinopsis-change" name="Sinopsis" placeholder="___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________">{{ isset($daticos->Sinopsis)?$daticos->Sinopsis:'' }}</textarea>
                    </div>

                </div>


                <div class="cont-p2">

                    <div class="color-text">
                        <label class="l" for="colorF-change">Color de Fondo</label>
                        <input  oninput="cambio()" value="{{ isset($daticos->ColorF)?$daticos->ColorF:'' }}" id="colorF-change" type="color" name="ColorF">
                    </div>

                    <div class="color-text">
                        <label class="l" for="colorT-change">Color de Texto</label>
                        <input oninput="cambio()" id="colorT-change" value="{{ isset($daticos->ColorT)?$daticos->ColorT:'' }}" type="color" name="ColorT">
                    </div>

                    <div class="color-text">
                        <label for="ColorTN-change">Color de Titulos</label>
                        <input oninput="cambio2()" value="{{ isset($daticos->ColorTN)?$daticos->ColorTN:'' }}" id="ColorTN-change" type="color" name="ColorTN">
                    </div>

                    <div class="color-text">
                        <label for="ColorFDT-change">Color de Fondo Overley</label>
                        <input oninput="cambio()" value="{{ isset($daticos->ColorFDT)?$daticos->ColorFDT:'' }}" id="ColorFDT-change" type="color" name="ColorFDT">
                    </div>

                    <div class="color-text">
                        <label for="ColorBTN-change">Color de Boton Comprar</label>
                        <input oninput="cambio()" value="{{ isset($daticos->ColorBTN)?$daticos->ColorBTN:'' }}" id="ColorBTN-change" type="color" name="ColorBTN">
                    </div>
                            
                </div>
                <div id="btn-cont">
                    <input id="btnEnviar" type="submit" value="Enviar">
                </div>
                
