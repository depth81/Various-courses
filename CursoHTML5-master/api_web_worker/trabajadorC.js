
//Cuando se dispara 'connect' se crea un array[0] de una sola posición que contiene el cuerpo del documento que se está conectando al trabajador compartido (trabajadorC). Cuando el segundo documento conecta, dispara el evento 'connect' y se crea otro array de único índice y se almacena ahí el cuerpo del segundo documento. Esa información hay que recuperarla. Nosotros vamos a crear un array propio para almacenar los valores que hay en cada array que crea el evento 'connect', o sea que cada vez que un doc conecta con el trabajadorC, nosotros vamos a coger lo que hay dentro del array (el puerto) y lo metemos en nuestro array[].

puertos = new Array();

addEventListener("connect", conectar, false);

addEventListener("connect", conectar, false);

function conectar(e){

    //e es la solicitud de conexión

    //Almacenar el puerto de la conexión entrante dentro de puertos[]. El array ports[0] es creado por el evento 'connect' al dispararse.
    puertos.push(e.ports[0]);

    //poner a ese puerto específico que se usó para conectar con la página web a la escucha del evento mensaje.
    e.ports[0].onmessage = enviar;

}

function enviar(e){

    //e es el puerto desencadenador del evento.

    for(var i=0; i<puertos.length; i++){

        //Recorrer el array y decirle que envíe un mensaje usando ese puerto.
        puertos[i].postMessage("El texto que has puesto es: " + e.data);

    }

}