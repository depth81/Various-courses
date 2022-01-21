function comenzar(){

    zonaDatos = document.getElementById("zonaDatos");

    var boton = document.getElementById("boton");

    boton.addEventListener("click", enviar, false);

    //Crear un objeto de tipo worker que nos va a devolver el código que almacenemos en un archivo externo *.js
    //El texto en el formulario será enviado a 'trabajador.js'
    trabajador = new Worker("trabajador.js");

    trabajador.addEventListener("message",recibido,false);

}

function enviar(){

    var nombre = document.getElementById("nombre").value;

    //Envía un mensaje postMessage que tendrá en su interior el texto que el usuario haya escrito en el cuadro de texto del formulario y se lo entregará al objeto 'worker' o 'trabajador'.
    trabajador.postMessage(nombre);

}

//recibido() escribe en la zonaDatos el texto procesado que recibimos del objeto 'trabajador'.
function recibido(e){

    //propiedad: data, hace referencia a los datos que acompañan a un objeto.
    zonaDatos.innerHTML = e.data;

}

window.addEventListener("load", comenzar,false);