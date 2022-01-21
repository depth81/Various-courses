var miAudio, reproducir, barra, progreso, maximo;
maximo = 600;

function comenzar(){

    miAudio = document.getElementById("miAudio");
    reproducir = document.getElementById("play");
    barra = document.getElementById("barra");
    progreso = document.getElementById("progreso");

    reproducir.addEventListener("click",clickando,false);
    barra.addEventListener("click",adelantando,false);

}

function clickando(){

    if((miAudio.paused==false) && (miAudio.ended==false)){

        miAudio.pause();
        reproducir.innerHTML = "Play";

    }
    else{

        miAudio.play();
        reproducir.innerHTML = "Pause"; 
        
        bucle = setInterval(estado,30);

    }

}

function estado(){

    if(miAudio.ended==false){

        var total = parseInt(miAudio.currentTime*maximo/miAudio.duration);

        progreso.style.width = total + "px";

    }

}

function adelantando(posicion){

    if((miAudio.paused==false) && (miAudio.ended==false)){

        var ratonX = posicion.pageX - barra.offsetLeft;

        var nuevoTiempo = ratonX*miAudio.duration/maximo;

        miAudio.currentTime = nuevoTiempo;

        progreso.style.width = ratonX + "px";

    }

}

window.addEventListener("load",comenzar,false);