function cambio() {
    document.getElementById("p-change").innerHTML = document.getElementById("sinopsis-change").value;
    document.getElementById("director-change").innerHTML = document.getElementById("cambioDire").value;
    document.getElementById("v").innerHTML = document.getElementById("vBoleta").value;
    document.getElementById("genero-change").innerHTML = document.getElementById("g").value;
    document.getElementById("feccha").innerHTML = document.getElementById("fecha-change").value;
    document.getElementById("nom").innerHTML = document.getElementById("nom-change").value;

//  -----colores-----
    document.getElementById("card-change").style.backgroundColor = document.getElementById("colorF-change").value;
    document.getElementById("card-change").style.color = document.getElementById("colorT-change").value;
    document.getElementById("buy").style.color = document.getElementById("colorT-change").value;
    document.getElementById("span-overlay").style.color = document.getElementById("colorT-change").value;
    document.getElementById("buy").style.backgroundColor = document.getElementById("ColorBTN-change").value;


    document.getElementById("overlay-edit").style.color = document.getElementById("colorT-change").value;
    document.getElementById("overlay-edit").style.backgroundColor = document.getElementById("ColorFDT-change").value;

}

function cambio1() {
    const img1 = document.querySelector("#input-file").files[0]
    var fileRender = new FileReader()
    fileRender.readAsDataURL(img1)
    fileRender.onload = () => {
        var imgNew = document.querySelector("#imagenVacia")
        imgNew.src = fileRender.result
    }

}

function cambio2() {
    document.getElementById("ti").style.color = document.getElementById("ColorTN-change").value;
    document.getElementById("nom").style.color = document.getElementById("ColorTN-change").value;
}

console.log("Si enlazó el archivo JS")