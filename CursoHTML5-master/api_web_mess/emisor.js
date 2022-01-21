function iniciar(){

    var boton = document.getElementById("boton");

    boton.addEventListener("click", enviar, false);

    window.addEventListener("message", recibir, false);

    recepcion = document.getElementById("zonaRecepcion");

}

function enviar(){

    var mensaje = document.getElementById("mensaje").value;

    var iframe = document.getElementById("iframe");

    //Con * se le dice a postMessage que no importa en dónde se encuentra el receptor en el servidor.
    //iframe.contentWindow.postMessage(mensaje, "*");

    iframe.contentWindow.postMessage(mensaje, "http://localhost:8080");
}

function recibir(e){

    //data se refiere a la información que viaja con el objeto desencadenante del evento.
    recepcion.innerHTML += e.data;

}   


window.addEventListener("load", iniciar, false);