<div class="cont-p1">
    <div class="input-form">
        <input oninput="cambio1()" id="input-file" type="file" name="Logo" >
        <input maxlength="45" oninput="cambio5()" value="{{ isset($daticos->Nombre)?$daticos->Nombre:'' }}" id="nom-change" required type="text" name="Nombre" placeholder="Nombre">
        <div class="textarea">
            <textarea oninput="cambio5()"  maxlength="260" required cols="31" rows="13" id="Descripcion" name="Descripcion" placeholder="___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________">{{ isset($daticos->Descripcion)?$daticos->Descripcion:'' }}</textarea>
        </div>
    </div>

</div>