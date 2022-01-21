function comenzar(){

    //variable global, no usa 'var' para la definición
    zonaDatos = document.getElementById("zonaDatos");

    //variable global.
    zonaProgreso = document.getElementById("zonaProgreso");

    //variable local se declara con 'var'
    var boton = document.getElementById("boton");   

    boton.addEventListener("click", leer, false);

}

//leer() es la función encargada de hacer la solicitud al servidor remoto.
function leer(){

    //el archivo está en el mismo directorio que el archivo html.
    //var url = "texto.txt";
    var url = "vid/video-2012-04-05-14-22-32.mp4";

    //construir un objeto de tipo XMLHttpRequest.
    var solicitud = new XMLHttpRequest();

    //Desencadena la acción cuando comienza la petición o descarga del archivo.
    solicitud.addEventListener("loadstart", comienzaBarra,false);

    //progress es un evento que se dispara cada 50 ms y se llama a la función estadoBarra() cada 50 ms también. 
    solicitud.addEventListener("progress",estadoBarra,false);

    //Cuando termine la descarga (evento load) se llama a mostrar().
    solicitud.addEventListener("load",mostrar,false);

    //Abrir una conexión
    solicitud.open("GET",url,true);

    //especificar la información que vamos a enviar. En este caso no se va a enviar nada (null).
    solicitud.send(null);

}

function comienzaBarra(){

    //Si hago esto directamente en el documento HTML tendría que identificar el elemento <progress> en la función comenzar(), entonces es más fácil de esta forma.
    zonaDatos.innerHTML = "<progress value='0' max='100'></progress>";

}

//Progreso de la barra de descarga. 'e' es la petición del archivo de vídeo y se recibe como parámetro. Se llama a estadoBarra() cada 50 ms.
function estadoBarra(e){

    //'loaded' hace referencia al tamaño total del archivo y 'total' hace referencia a lo que va descargado en un momento en concreto. Regla de 3.
    var porcentaje = parseInt(e.loaded/e.total*100);

    //identificar la barra de progreso. querySelector identifica un elemento html en una página web a través de su etiqueta (id).
    var barraProgreso = zonaDatos.querySelector("progress");

    //las barras de progreso crecen con la propiedad 'value' y un valor igual a un porcentaje (0 a 100)
    barraProgreso.value = porcentaje;

    zonaProgreso.innerHTML = porcentaje + "%";

}

//mostrar() será llamada cuando la petición del vídeo finalice o cuando se desencadene el evento 'load'.
function mostrar(e){

    //responseText indica que el objeto pedido debe ser devuelo en formato texto.
    //zonaDatos.innerHTML = e.target.responseText;

    zonaDatos.innerHTML = "Archivo leído";

}

window.addEventListener("load", comenzar, false);