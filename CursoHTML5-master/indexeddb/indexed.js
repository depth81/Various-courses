var bd;  //Variable global accesible desde cualquier parte del código.

function iniciar(){

    //identificar todos los elementos HTML en el documento. Declaro las variables sin la palabra reservada "var" o sea que se pueden usar fuera de la función iniciar(). Si se pone "var" en la definición, las variables tienen un ámbito estrictamente local a la función iniciar().
    zonaDatos = document.getElementById("zonaDatos");
    
    boton = document.getElementById("grabar");

    //Poner el botón a la escucha del evento 'click'.
    boton.addEventListener("click", agregarObjeto, false);

    //crear la BD y guardarla en una variable 'solicitud'. La variable solicitud tiene un ámbito estrictamente local a la función iniciar().
    var solicitud = indexedDB.open("miBase2");

    //Ha sido exitosa la creación de la BD?. Almacenar la BD dentro de una variable para poder hacer referencia a ella desde el código JS.
    solicitud.onsuccess = function(e){

        //e es el objeto que desencadena el evento (onsuccess), en este caso es la BD. Almaceno en 'bd' la base de datos.
        bd = e.target.result;

    }

    /*Crear el almacén de objetos (análogo a las tablas en una BD relacional)en este caso se creará solamente un almacén y se le debe dar un nombre.
    Se crea el almacén de objetos (tabla) la primera vez que se carga el navegador; si después de crear el almacén de datos vuelvo a cargar el navegador (F5) no se debe crear otra vez el almacén (tabla).*/

    solicitud.onupgradeneeded = function(e){

        //Crear un almacén de datos dentro de la BD. Nombre del almacén y campo clave son los dos parámetros necesarios.
        
        //La primera vez que se carga el navegador se crea la BD y si esto tiene éxito, se guarda en bd la base de datos y si necesito actualización (la primera vez que se carga el navegador), también guardo en bd la base de datos. La segunda vez que ejecute el navegador, la primera línea a continuación no se ejecuta, solamente lo hará onsuccess pero la primera vez se ejecutan las dos líneas.
        bd = e.target.result;
        bd.createObjectStore("gente",{keyPath:"clave"});

    }

}

function agregarObjeto(){

    //El valor en el campo del formulario se guarda en la variable clave.
    var clave = document.getElementById("clave").value;

    var titulo = document.getElementById("titulo").value;

    var fecha = document.getElementById("fecha").value;

    //crear una transacción que indique al navegador qué tipo de acción queremos hacer con el almacén de datos: 1) Read 2) Write 3) Read/Write

    var transaccion = bd.transaction(["gente"],"readwrite");

    //Almacenar la transacción en una variable.
    var almacen = transaccion.objectStore("gente");

    //Insertar la información que hay en los campos. La tabla gente va a tener un campo 'clave' en el cual va a estar la información dle primer cuadro de texto del formulario y así con los otros. En realidad no hay tablas ni campos, es una analogía con las BD relacionales.
    var agregar = almacen.add({clave:clave, titulo:titulo, fecha:fecha});

    agregar.addEventListener("success",mostrar,false);

    //Borrar los campos después de ingresar información
    document.getElementById("clave").value=" ";

    document.getElementById("titulo").value=" ";

    document.getElementById("fecha").value=" ";

}

function mostrar(){

    //Resetear la zona de datos ingresados.
    zonaDatos.innerHTML = " ";

    //Crear una transacción para decirle al navegador que vamos a leer la información del almacén de datos "gente". Las variables transacción y almacen (var) tienen un ámbito local a la función mostrar().
    var transaccion = bd.transaction(["gente"],"readonly");

    var almacen = transaccion.objectStore("gente");

    //Crear un cursor. Nos indica en qué registro nos encontramos dentro del almacén de objetos.
    var cursor = almacen.openCursor();

    //Crear el cursor fue exitoso?. Crear otra función para leer y mostrar la información,
    cursor.addEventListener("success",mostrarDatos,false);

}

function mostrarDatos(e){

    var cursor = e.target.result;

    if(cursor){

        // "cursor.value.clave" --> Extraer la información del almacén de datos. 
        zonaDatos.innerHTML += "<div>" + cursor.value.clave + " - " + cursor.value.titulo + " - " + cursor.value.fecha + "</div>";

        //Que el cursor avance
        cursor.continue();

    }

}

window.addEventListener("load", iniciar, false);