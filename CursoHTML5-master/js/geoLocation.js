function comenzar(){

    var miBoton = document.getElementById("dameUbicacion");

    miBoton.addEventListener("click", obtener, false);

}

function obtener(){

    //Usar dispositivos GPS si están disponibles. Si la posición se encuentra en la caché del navegador y esta fue obtenida hace menos de 60s entonces obtiene la posición del navegador en vez de pedir la ubicación al GPS. Si no encuentra ninguna posición hace menos de 60s entonces obtiene una nueva con un tiempo límite de 10s y queda guardada en la caché del navegador.
    var parametros = {enableHighAccuracy:true, timeout:10000, maximumage:60000};

    //El objeto navigator es el navegador web en uso. Geolocation es otro objetoque pertenece a su vez al objeto Navigator.
    //Se puede cambiar getCurrentPosition por watchPosition y se pide la ubicación una vez por minuto. watchPosition se usa más en dispositivos móviles para pedir la posición periódicamente.
    navigator.geolocation.getCurrentPosition(mostrarPosicion, gestionErrores, parametros);

}   

//getCurrentPosition averigua la posición y la almacena en un objeto al cual llamaremos "posicion" y es el parámetro de la función.
function mostrarPosicion(posicion){

    //identificar la sección en donde se va a escribir la posición, en este caso es la misma área en donde está el botón.
    var ubicacion = document.getElementById("ubicacion");

    var miUbicacion = "";

    miUbicacion+="Latitud: " + posicion.coords.latitude + "<br>";

    miUbicacion+="Longitud: " + posicion.coords.longitude + "<br>";

    miUbicacion+="Exactitud: " + posicion.coords.accuracy + "<br>"; 

    /*var miMapa = "http://maps.google.com/maps/api/staticmap?center=" + posicion.coords.latitude + "," + posicion.coords.longitude + "," +       "&zoom=12&size=400x400&sensor=false&markers=" + posicion.coords.latitude + "," + posicion.coords.longitude;*/

    ubicacion.innerHTML = miUbicacion;

    //ubicacion.innerHTML = "<img src='" + miMapa + "'>";
}

//getCurrentPosition crea un objeto error cuando no se puede averiguar la posicion y se usa como argumento para la función gestionErrores.
function gestionErrores(error){

    //alert("Ha habido un error " + error.code + " " + error.message);

    /* if(error.message=="User denied Geolocation"){

        alert("Debes permitir el uso de la geolocalización en tu navegador");

    } */

    if(error.code==1){

        alert("Debes permitir el uso de la geolocalización en tu navegador");

    }
    
}

window.addEventListener("load", comenzar, false);