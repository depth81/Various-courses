<?php

include("BaseDatos.php");

    if(isset($_POST["botonEnvio"])){

        //Recibo los datos del formulario
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $descripcion = $_POST["descripcion"];
        $genero = $_POST["genero"];
        $foto = $_POST["foto"];

        
        //Los datos ya estan disponibles en el servidor
        /* echo($nombre);
        echo($apellido);
        echo("<br>");
        echo($genero);
        echo("<br>");
        echo($descripcion); */

        //Instanciar la clase BaseDatos
        $transaccion = new BaseDatos();

        //Acceder al metodo.
        //$transaccion -> conectarBD();

        //Crear la consulta de registro de usuario (insert)
        $consultaSQL = "INSERT INTO usuarios(nombre, apellido, descripcion, genero, foto) VALUES ('$nombre', '$apellido', '$descripcion', '$genero', '$foto')";

        //Llamar al metodo de la BD agregarDatos($consultaSQL)
        $transaccion -> agregarDatos($consultaSQL);

        //Redireccion  HACERLO en agregar, eliminar y consultar datos!!!
        header("location:index.php");

        //OPCIONAL: Variable SESSION que diga "usuario registrado con exito"

    }

?>