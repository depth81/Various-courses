function comenzar(){

    //variable global, no usa 'var' para la definición
    zonaDatos = document.getElementById("zonaDatos");

    var boton = document.getElementById("archivos");

    boton.addEventListener("change",subirArchivos,false);

}

function subirArchivos(e){

    //Recibe el parámetro (e) desencandenante del evento (el botón), entonces recibe el botón en el momento de desencadenar el evento.
    //Guardamos los ficheros o archivos que puedan acompañar al botón. Pueden ser varios archivos y se almacenan en un array[i].
    var archivos = e.target.files;

    var archivo = archivos[0];

    //El archivo "procesar.php" no va a hacer nada, esto es porque hay que indicar del lado del servidor quién es el encargado de procesar la información. 
    var url = "procesar.php";

    //Crear la conexión al servidor
    var solicitud = new XMLHttpRequest();

    //LLamar a una función cuando comience la subida del archivo, a otra función mientras dura la subida del archivo y a una tercera función cuando termina la subida del archivo. Atributo 'upload' de XMLHttpRequest. El objeto 'subida' es igual la subida del archivo.
    var subida = solicitud.upload;

    subida.addEventListener("loadstart",comienzaBarra, false);

    subida.addEventListener("progress",estadoBarra,false);

    subida.addEventListener("load", mostrar, false);

    solicitud.open("POST", url, true);

    var datos = new FormData();

    datos.append("archivo", archivo);

    solicitud.send(datos);

}

function comienzaBarra(){

    zonaDatos.innerHTML="<progress value='0' max='100'></progress>";

}

function estadoBarra(e){

    var porcentaje = parseInt(e.loaded/e.total*100);

    var barraProgreso = zonaDatos.querySelector("progress");

    barraProgreso.value = porcentaje;

    zonaProgreso.innerHTML=porcentaje + "%";

}

function mostrar(e){

    zonaDatos.innerHTML="Terminado!!!";

}

window.addEventListener("load", comenzar, false);