function comenzar(){

    zonaDatos = document.getElementById("zonaDatos");

    var boton = document.getElementById("boton");

    boton.addEventListener("click", crear, false);

    //Solicitar permiso al navegador para acceder al disco duro. Se va a pedir permiso para almacenamiento persistente. Para usar Chrome se usa 'webkit' y para Firefox se usa 'moz'. 5MB a Bytes (5*1024*1024)
    navigator.webkitPersistentStorage.requestQuota(5*1024*1024, acceso);

}

//Creación del sistema de archivos.
function acceso(){

    window.webkitRequestFileSystem(PERSISTENT,5*1024*1024,crearSistema,errores);

}

//Se lanza el objeto FileSystem al crear exitosamente un sistema de archivos. Lo capturamos y lo pasamos como parámetro ('sistema').
function crearSistema(sistema){

    //'espacio' será la raíz del sistema de archivos.
    espacio = sistema.root;

}

//generar el archivo
function crear(){

    //Almacenar lo que el usuario escriba en el cuadro de texto del formulario.
    var nombreArchivo = document.getElementById("entrada").value;

    //Hay algo escrito en el cuadro de texto?
    if(nombreArchivo!=""){

        //Crear el archivo en la raíz
        espacio.getFile(nombreArchivo,{create:true, exclusive:false},mostrar, errores);

    }

}

//Mostrar información del archivo creado y si la creación fue exitosa. Capturar el objeto lanzado por getFile() y pasarlo como parámetro.
function mostrar(entrada){

    //Borrar lo que haya en la casilla de texto.
    document.getElementById("entrada").value="";

    zonaDatos.innerHTML = "Éxito en la creación de espacio y archivo! <br>";

    zonaDatos.innerHTML += "Nombre: " + entrada.name + "<br>";

    zonaDatos.innerHTML += "Ruta: " + entrada.fullPath + "<br>";

}

//Cuando se produce un error, se lanza un objeto que hay que capturar.
function errores(e){

    alert("Ha habido un error: " + e.code);

}

window.addEventListener("load", comenzar, false);