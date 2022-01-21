var elementoDestino;

//Identificar los elementos de la página web
function comenzar(){

    var imagenes  = document.querySelectorAll("#cajaimagen img");
    //var imagenes  = document.querySelectorAll("img[id^='ima']");

    //poner a cada imágen a la escucha del evento "dragstart"
    for(var i=0; i<imagenes.length; i++){

        imagenes[i].addEventListener("dragstart", comenzarArrastrar, false);

        //evento al terminar de arrastrar la imágen. No se pone a escuchar a la imágen2 (imagenes[1])
        if(i!=1){
            imagenes[i].addEventListener("dragend", terminar, false);
        }
        

    }

    //identificar la zona de destino
    elementoDestino = document.getElementById("zonaDestino");

    //poner a la zona de destino a la escucha de eventos
    elementoDestino.addEventListener("dragenter", entrar,false);

    elementoDestino.addEventListener("dragleave", salir,false);

    elementoDestino.addEventListener("dragover", function(e){e.preventDefault();},false);

    elementoDestino.addEventListener("drop",soltar,false);

}

function comenzarArrastrar(e){

    //identificar la imágen que ha desencadenado el evento
    var elemento = e.target;

    //establecer la información a compartir del objeto que desencadenó el evento (dragstart). En este caso nos interesa el id.
    e.dataTransfer.setData("Text",elemento.getAttribute("id"));

}

function soltar(e){

    //resetear el comportamiento por defecto del navegador cuando soltamos el elemento en la zona de destino.
    e.preventDefault(); 
    
    //rescatar el id del objeto que desencadenó el evento (dragstart) la cual es la información anteriormente compartida con setData().
    var id = e.dataTransfer.getData("Text");

    //No queremos arrastrar nunca la imagen2.
    if(id!="imagen2"){

        //Almacenar la ruta(src) de imagenx. 
        var source = document.getElementById(id).src;

        elementoDestino.innerHTML = "<img src='" + source + "'>";

    }
    else{

        elementoDestino.innerHTML = "La imágen no es admitida";

        elementoDestino.style.background = "#FA0D29";

    }

}

function entrar(e){

    e.preventDefault();

    //rescatar el id del objeto que desencadenó el evento (dragstart) la cual es la información anteriormente compartida con setData().
    var id = e.dataTransfer.getData("Text");

    if(id!="imagen2"){

        elementoDestino.style.background = "rgba(8,252,25,.8)";

    }
    else{

        elementoDestino.style.background = "rgba(255,0,0,1)";

    }
    
}

function salir(e){

    e.preventDefault();

    elementoDestino.style.background = "rgba(0,0,0,0)" ;

}

function terminar(e){

    var elemento = e.target;

    elemento.style.visibility = "hidden";

}

window.addEventListener("load",comenzar, false);