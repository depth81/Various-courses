var elementoOrigen;
var elementoDestino;

function comenzar(){

    elementoOrigen = document.getElementById("imagen");

    elementoOrigen.addEventListener("dragstart",arrastrar,false);

    elementoDestino = document.getElementById("zonaDestino");

    //Cuando se produzca el evento dragover en la zona de destino, modifique el comportamiento por defecto que tenga el navegador
    elementoDestino.addEventListener("dragover", function(e){e.preventDefault();},false);

    elementoDestino.addEventListener("drop",soltar,false);

    elementoOrigen.addEventListener("dragend", terminar,false);

    elementoDestino.addEventListener("dragenter", entrando, false);

    elementoDestino.addEventListener("dragleave", saliendo, false);

}

function arrastrar(e){

    //e es el objeto que desencadena el evento (dragStart)
    
    //Capturar el atributo que queramos (getAttribute) del elemento orígen (la imágen que estamos arrastrando), en este caso necesitamos la ruta de la imágen y hacemos que JS la tome automáticamente.
    var codigo = "<img src='" + elementoOrigen.getAttribute("src") + "'>";

    //la información (setData) que quiero compartir entre las dos zonas (O y D) es la etiqueta img para que se pueda poner la imágen en la zona de destino.

    e.dataTransfer.setData("Text",codigo);

}

function soltar(e){

    //e es el objeto que desencadena el evento (drop). Se le ordena al navegador resetear el comportamiento por defecto cuando suelto un objeto.

    e.preventDefault();

    //innerHTML establece desde JS un código html para el objeto  al que se hace referencia. El elemento tendrá en su interior el código HTML indicado. Por otro lado, getData le dice a la zona de destino qué información compartida debe capturar.
    elementoDestino.innerHTML=e.dataTransfer.getData("Text");

}

function terminar(e){

    //Identificar cuál objeto (e) que ha desencadenado el evento (dragend) y lo almaceno en una variable (elemento)
    var elemento = e.target;

    elemento.style.visibility = "hidden";

}

function entrando(e){

    e.preventDefault();

    elementoDestino.style.background="rgba(8,252,24,8)";

}

function saliendo(e){

    e.preventDefault();

    elementoDestino.style.background="#FFFFFF"

    //elementoDestino.style.visibility="hidden";

}

window.addEventListener("load", comenzar, false);
