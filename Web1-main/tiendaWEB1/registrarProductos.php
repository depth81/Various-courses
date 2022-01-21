<?php

include("BaseDatos.php");

    if(isset($_POST["botonEnvio"])){

        //Recibir los datos desde el formulario
        $NombreProducto = $_POST["NombreProducto"];
        $MarcaProducto = $_POST["MarcaProducto"];
        $PrecioProducto = $_POST["PrecioProducto"];
        $Descripcion = $_POST["Descripcion"];
        $Foto = $_POST["Foto"];

        //Los datos ya estan disponibles en el servidor
        /* echo($NombreProducto);
        echo("<br>");
        echo($MarcaProducto);
        echo("<br>");
        echo($PrecioProducto);
        echo("<br>");
        echo($Descripcion); */

        //Instanciar la clase BaseDatos
        $transaccion = new BaseDatos();

        //Acceder al metodo.
        //$transaccion -> conectarBD();

        //Crear la consulta de registro de usuario (insert)
        $consultaSQL = "INSERT INTO productos(NombreProducto, MarcaProducto, PrecioProducto, Descripcion, Foto) VALUES ('$NombreProducto', '$MarcaProducto', '$PrecioProducto', '$Descripcion', '$Foto')";

        //Llamar al metodo de la BD agregarDatos($consultaSQL)
        $transaccion -> agregarDatos($consultaSQL);

        //Redireccionar
        header("location:formularioRegistro.php");

    }

?>