function comenzar(){

    var boton = document.getElementById("boton");

    boton.addEventListener("click", enviar ,false);

    trabajador = new SharedWorker("trabajadorC.js");

    //poner a la escucha al trabajador compartido. Escucha en puertos.
    trabajador.port.addEventListener("message", recibido, false);

    //Comience el envío de mensajes a través del puerto del canal creado con el trabajadorC.
    trabajador.port.start();

}

function enviar(){

    var nombre = document.getElementById("nombre").value;

    trabajador.port.postMessage(nombre);

}

//Qué hacer cuando recibimos el mensaje?
function recibido(e){

    //e es el propio mensaje escrito en el cuadro de texto por el usuario.
    
    alert(e.data);

}


window.addEventListener("load", comenzar, false);