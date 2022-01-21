function comenzar(){

    //variable global, no usa 'var' para la definición
    zonaDatos = document.getElementById("zonaDatos");

    //variable local se declara con 'var'
    var boton = document.getElementById("boton");   

    boton.addEventListener("click", enviarDatos, false);

}

function enviarDatos(){

    nombre = document.getElementById("Nombre").value;

    apellido = document.getElementById("Apellido").value;

    //Crear objeto de tipo FormData
    var datos = new FormData();

    //Agregar la información que vamos a enviar al servidor al objeto 'datos'. Formato clave:valor.
    datos.append("nombre",nombre);

    datos.append("apellido", apellido);

    //En el lado del servidor la información contenida en el objeto 'datos' será procesada por un archivo *.php el cual va a estar en el mismo directorio del archivo html. Necesito almacenar la ruta en el servidor de ese archivo *.php.
    var url = "procesar.php";

    //crear un objeto XMLhttpRequest para conectar con el servidor remoto.
    var solicitud = new XMLHttpRequest();

    solicitud.addEventListener("load",mostrar,false);

    //Abrir la conexión. Se va a pasar la información dentro de variables y por eso se usa POST. Con GET la información se pasa en la URL.
    solicitud.open("POST",url,true);

    //Enviar la información al servidor.
    solicitud.send(datos);

}

function mostrar(e){

    //Obtener una respuesta del servidor en forma de texto.
    zonaDatos.innerHTML = e.target.responseText;

}

window.addEventListener("load", comenzar, false);