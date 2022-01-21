function comenzar(){

    //identificar el botón
    var boton = document.getElementById("grabar");

    //poner el botón a la escucha del evento click
    boton.addEventListener("click", itemNuevo, false);

}

//Crear un ítem nuevo (clave:valor) con los valores que hay en los cuadros de texto en el formulario
function itemNuevo(){

    //la variable "clave" va a ser igual al valor que haya dentro del elemento con id "clave".
    var clave = document.getElementById("clave").value;

    //la variable "valor" va a ser igual al valor que haya dentro del elemento con id "valor".
    var valor = document.getElementById("valor").value;

    //Guardar la información mientras la pestaña del navegador esté abierta (SessionStorage/localStorage) creando un ítem nuevo.
    localStorage.setItem(clave,valor);
    //sessionStorage[clave]=valor; //Notación alternativa

    //Llamar a leerMostrar y pasando "clave" como parámetro.
    leerMostrar(clave);

    //Dejar los campos en blanco después de grabar datos.
    document.getElementById("clave").value="";
    document.getElementById("valor").value="";

}

//Leer la información guardada (se guarda en la "clave"; Usando la clave, la API web storage da automáticamente el "valor") y mostrarla.

function leerMostrar(clave){

    //En dónde quiero que me muestr la información? En zonaDatos.
    var zonaDatos = document.getElementById("zonadatos");

    //Insertar botón para eliminar toda la información guardada.
    zonaDatos.innerHTML = '<div><button onclick="eliminarTodo();">Eliminar todo</button></div>';

    //for para acceder a la información almacenada en el array[].
    for(var i=0; i<localStorage.length;i++){

        //key() permite acceder a las diferentes posiciones del array en donde la pestaña del navegador guarda la información que se ingresa (dentro del objeto sessionStorage/localStorage)
        var clave = localStorage.key(i);

        var elValor = localStorage.getItem(clave);
        //var elValor = sessionStorage[clave]; //Notación alternativa.

        //Incluir el valor en zonaDatos (incrustar un elemento HTML). El operador += permite agregar una nueva clave con su correspondiente valor.
        zonaDatos.innerHTML += '<div>Clave: ' + clave + '--' + 'Valor: ' + elValor + '<br> <button onclick="eliminarItem(\'' + clave + '\')">Eliminar ítem</button></div>';

    }

 }

 function eliminarTodo(){

    if(confirm("Estás seguro?")){

        localStorage.clear();

        leerMostrar();

    }

}

function eliminarItem(clave){

    if(confirm("Estás seguro?")){

        localStorage.removeItem(clave);

        leerMostrar();

    }

}


//Cuando cargue el navegador va a poner a la escucha del evento click al botón
window.addEventListener("load",comenzar,false);