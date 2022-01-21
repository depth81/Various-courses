function comenzar(){

    //Identificar elementos HTML y guardarlos en sendas variables.
    zonaDatos = document.getElementById("zonaDatos");

    archivos = document.getElementById("archivos");

    //Poner a la escucha al botón 'archivos' del evento 'change'
    archivos.addEventListener("change", procesar, false);

}

function procesar(e){

    /*e hace referencia al objeto que desencadena el evento en el momento en que ocurre el evento. Acá hace referencia al objeto botón tipo 'file'. Así podemos acceder a las propiedades y métodos del objeto que desencadena el evento en el momento que ocurre el evento, se usa el objeto evento (e).La propiedad 'files' hace referencia a los archivos seleccionados después de pulsar en el botón y son almacenados en un array. */
    var archivos = e.target.files;

    zonaDatos.innerHTML = "";

    var miArchivo = archivos[0];

    //El archivo seleccionado es una imágen o no? /image/ es una expresión regular en JS.
    if(!miArchivo.type.match(/image/)){

        alert("Selecciona una imágen por favor");

    }
    else{

        zonaDatos.innerHTML += "Nombre del archivo: " + miArchivo.name + "<br>";

        //1KB = 1024 Bytes
        zonaDatos.innerHTML += "Tamaño del archivo: " + Math.round(miArchivo.size/1024) + " Kilobytes <br>";
        
        //crear un lector para leer la información que nos devuelven los métodos del objeto devuelto.
        var lector = new FileReader();

        lector.readAsDataURL(miArchivo);

        //Poner al lector a la escucha para que cuando cargue, se llame a la función mostrarEnWeb().
        lector.addEventListener("load", mostrarEnWeb, false);

    }

} //fin procesar()

function mostrarEnWeb(e){

    //El objeto que desencadena el evento es el lector entonces la e hace referencia al lector.
    var resultado = e.target.result;

    zonaDatos.innerHTML += "<img src='" + resultado + "' width='85%'>"

}

window.addEventListener("load", comenzar, false);