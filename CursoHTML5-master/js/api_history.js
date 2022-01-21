function comenzar(){

    zonaDatos = document.getElementById("zonaDatos");

    url = document.getElementById("url");

    url.addEventListener("click", cambiaurl, false);

    //popstate se dispara con cada cambio entre páginas (cambio de url).
    window.addEventListener("popstate", nuevaurl, false);

    //Estado==1 en la pág. ppal. Cuando el doc entra en comenzar() está cargando la pág. principal.

    window.history.replaceState(1,null);

}



function cambiaurl(){

/*    zonaDatos.innerHTML = "Estás en la página #2";

   window.history.pushState(null, null, "pagina2.html"); */

   //Que me muestre en qué página estoy...
   mostrar(2);

   //establecer el estado de la segunda página
   window.history.pushState(2, null, "pagina2.html"); 

}

function nuevaurl(e){

    //e es la url que es el objeto desencadenante del evento 'popstate'.

    //'state' es una propiedad de la url.
    mostrar(e.state);

}

function mostrar(actual){

    zonaDatos.innerHTML = "Estás en la página: " + actual;

}

/* document.addEventListener("load", comenzar, false); */

window.onload = comenzar;