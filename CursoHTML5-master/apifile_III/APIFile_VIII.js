function comenzar(){

    zonaDatos = document.getElementById("zonaDatos");

    var boton = document.getElementById("boton");

    boton.addEventListener("click", leerArchivo, false);

    //Solicitar permiso al navegador para acceder al disco duro. Se va a pedir permiso para almacenamiento persistente. Para usar Chrome se usa 'webkit' y para Firefox se usa 'moz'. 5MB a Bytes (5*1024*1024)
    navigator.webkitPersistentStorage.requestQuota(5*1024*1024, acceso);

}

//Creación del sistema de archivos. Reservar espacio en el disco duro.
function acceso(){

    window.webkitRequestFileSystem(PERSISTENT,5*1024*1024,crearSistema,errores);

}

//Se lanza el objeto FileSystem al crear exitosamente un sistema de archivos. Lo capturamos y lo pasamos como parámetro ('sistema').
function crearSistema(sistema){

    //'espacio' será la raíz del sistema de archivos.
    espacio = sistema.root;

}

function leerArchivo(){

    var nombre = document.getElementById("archivoOrigen").value;

    espacio.getFile(nombre, {create:true, exclusive:false}, function(entrada){

        //EL metodo file() sirve para leer los archivos y sus contenidos. Se genera un objeto tipo File con sus propiedades y métodos.
        entrada.file(leerContenido,errores);

    }, errores);

}

//archivo es el parámetro tipo File que se genera al invocar el método file()
function leerContenido(archivo){

    zonaDatos.innerHTML = "Nombre: " + archivo.name + "<br>";

    zonaDatos.innerHTML += "Tamaño: " + archivo.size + " bytes <br>";

    zonaDatos.innerHTML += "Modificado: " + archivo.lastModified + " ms <br>";

    //Construir un objeto de tipo fileReader para leer la información guardada en el sistema de archivos (nombre, tamaño)
    var lector = new FileReader();

    //Cuando cargue (onload) el objeto lector, llamar a una función que se llama exito(). La función es acompañada del objeto que ha desencadenado el evento (el propio 'lector') 
    lector.onload = exito;

    //Leer la información del archivo en formato texto.
    lector.readAsText(archivo);
    
}

//Capturar el objeto 'lector' que genera el evento onload.
function exito(e){

    //resultado es igual al objeto que ha desencadenado el evento.
    var resultado = e.target.result;

    document.getElementById("archivoOrigen").value = "";

    zonaDatos.innerHTML += "Contenido: " + resultado;

}

function errores(e){

    alert("Ha habido un error: " + e.code);

}

window.addEventListener("load", comenzar, false);