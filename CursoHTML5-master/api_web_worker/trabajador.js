//Ponerse a la escucha de un mensaje.
addEventListener("message", mensajeRecibido, false);

function mensajeRecibido(e){

    //e es el mensaje que llega, un texto. 
    var respuesta = "El texto escrito en el cuadro es: " + e.data;

    //enviar de vuelta la respuesta.
    postMessage(respuesta);

}