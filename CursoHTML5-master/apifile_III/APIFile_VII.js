function comenzar(){

    zonaDatos = document.getElementById("zonaDatos");

    var boton = document.getElementById("boton");

    boton.addEventListener("click", escribirArchivo, false);

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

function escribirArchivo(){

    //Capturar lo que se escriba en el cuadro de texto.
    var nombre = document.getElementById("archivoOrigen").value;

    //Crear un archivo nuevo. Cuando se invoca el método createWriter() se crea un objeto de tipo fileWriter() y este se pasa por parámetro a escribirContenido().
    espacio.getFile(nombre,{create:true, exclusive:false},function(entrada){

        entrada.createWriter(escribirContenido,errores);

    }, errores); //end getfile()

}

function escribirContenido(fileWriter){

    //Capturar lo que se escriba en el cuadro de texto.
    var texto = document.getElementById("texto").value;
    
    //el evento Writeend (onwriteend) se desencadena cuando finaliza la escritura del archivo.
    fileWriter.onwriteend = exito();

    //Transformar lo que hay en 'texto' en un formato blob. Se usa un constructor que recibe como parámetro un array en donde está el texto que introdujo el usuario en el área de texto.
    var blob = new  Blob([texto],{type:"text/html"});

    //Finalmente escribir texto en el objeto de tipo blob creado arriba. Solamente se ha preparado al objeto blob diciéndole que va a recibir texto. A continuación la instrucción definitiva de escritura.
    fileWriter.write(blob);

}

function exito(){

    document.getElementById("archivoOrigen").value = "";

    document.getElementById("texto").value = "";

    zonaDatos.innerHTML = "Archivo creado con éxito";

}

function errores(e){

    alert("Ha habido un error: " + e.code);

}

window.addEventListener("load", comenzar, false);