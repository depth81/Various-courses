function comenzar(){

    trabajador = new SharedWorker("trabajadorC.js");

    trabajador.port.addEventListener("message", recibido, false);

    trabajador.port.start();

}

function recibido(e){

    zonaDatos = document.getElementById("zonaDatos");

    zonaDatos.innerHTML = e.data;
}

window.addEventListener("load", comenzar, false);