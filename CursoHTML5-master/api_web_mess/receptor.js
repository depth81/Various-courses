function iniciar(){

    //poner a la página a la escucha del evento 'message' y llamar a una función.
    window.addEventListener("message", receptor, false);

}

function receptor(e){

    var zonaMensajes = document.getElementById("zonaMensajes");

    //Comparar si el origen del documento es mi dominio
    if(e.origin == "http://localhost:8080"){

        zonaMensajes.innerHTML += "Mensaje desde: " + e.origin + "<br>";

        zonaMensajes.innerHTML += "Mensaje: " + e.data + "<br>";

        //localizar el documento de donde proviene el mensaje y el mensaje tiene que ir al dominio que envió el mensaje. (propiedad 'origin')
        e.source.postMessage("Mensaje recibido correctamente" + "<br>", e.origin);

    }
    else{

        e.source.postMessage("Mensaje erróneo" + "<br>", e.origin);
    
    }

}

window.addEventListener("load", iniciar, false);