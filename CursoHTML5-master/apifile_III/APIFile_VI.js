function comenzar(){

    zonaDatos = document.getElementById("zonaDatos");

    var boton = document.getElementById("boton");

    boton.addEventListener("click", modificar, false);

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

    //Decirle al navegador a cuál directorio ir para ver los archivos almacenados. Hay que 'representar' al directorio raíz.
    ruta = "";

    mostrar();  

}

/* function modificar(){

    var origen = document.getElementById("archivoOrigen").value;

    var destino = document.getElementById("directorioDestino").value;

    espacio.getFile(origen,null,function(archivo){

        //Capturar el directorio a donde quiero mover el archivo.
        espacio.getDirectory(destino,null,function(directorio){

            archivo.moveTo(directorio,null,exito,errores);

        },errores); //end getDirectory()

    },errores); //end getFile()

} */

function modificar(){

    var origen = document.getElementById("archivoOrigen").value;

    //Sobreescribir el valor de la variable 'origen' precedido de una posible ruta lo cual permite eliminar archivos no solamente de la raíz sino de cualquier directorio si escribimos la ruta delante del nombre del archivo.
    origen = ruta + origen;

    //Eliminar directorio: getDirectory()
    espacio.getDirectory(origen,null,function(archivo){

        /* archivo.remove(exito,errores); */
        archivo.removeRecursively(exito,errores);

    },errores); //end getFile()

}

function exito(){

    //Borrar los cuadros de texto
    document.getElementById("archivoOrigen").value = "";

    /* document.getElementById("directorioDestino").value = ""; */

    //mostrar cómo está el sistema de archivos después de hacer el movimiento anterior.

    mostrar();
}

function mostrar(){

    //Borrar lo que haya escrito en el formulario.
    document.getElementById("archivoOrigen").value = "";

    zonaDatos.innerHTML = "";

    //Abrir el directorio en donde me encuentro
    espacio.getDirectory(ruta,null,leerDirectorio,errores);

    //Si hay éxito al abrir, llamar a leerDirectorio() y lanza el directorio como parámetro.

}

function leerDirectorio(dir){

    //createReader() crea un objeto de tipo 'directoryReader' y lo almacenamos en 'lector'. Podemos acceder ahora al método 'readEntries' de 'directoryReader'.
    lector = dir.createReader();

    leer();

}

function leer(){

    lector.readEntries(function(archivos){

        //si es true es porque al menos hay un elemento en el array.
        if(archivos.length){

            listar(archivos);

        }

    },errores);

}

function listar(archivos){

    //recorrer el array archivos[]
    for(var i=0; i<archivos.length; i++){

        if(archivos[i].isFile){

            zonaDatos.innerHTML += archivos[i].name + "<br>";
        }
        else if(archivos[i].isDirectory){

            //se aplica el estilo de clase (css) llamado '.directorio'
            zonaDatos.innerHTML += "<span onclick='cambiarDirectorio(\"" + archivos[i].name + "\")' class='directorio'>" + archivos[i].name + "</span><br>";

        }
    }

}

function cambiarDirectorio(nuevaRuta){

    ruta = ruta+nuevaRuta + "/";

    mostrar();

}

function volver(){

    //directorioActual es lo que devuelve getDirectory() y es el directorio en el que me encuentro actualmente.
    espacio.getDirectory(ruta,null,function(directorioActual){

        //Cuál es el directorio padre del directorio en el que me encuentro?. directorioPadre es lo que devuelve el método getParent().
        directorioActual.getParent(function(directorioPadre){

            //Guardar el directorio padre en la variable 'ruta'. La propiedad fullPath devuelve la ruta completa del directorio especificado (directorioPadre) el cual me da getParent().
            ruta = directorioPadre.fullPath;

            mostrar();

        }, errores);  //getParent()

    }, errores); //getDirectory()

}

function errores(e){

    alert("Ha habido un error: " + e.code);

}

window.addEventListener("load", comenzar, false);