function comenzar(){

    var cache = window.applicationCache;

    cache.addEventListener("error", errores, false);

}

function errores(){

    alert("No se puede descargar");

}


window.addEventListener("load", comenzar, false);