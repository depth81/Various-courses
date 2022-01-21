<?php   

    include("BaseDatos.php");

    //Crear el objeto tipo BaseDatos
    $transaccion = new BaseDatos();


    //Recibir datos

    if(isset($_POST["botonEditar"])){

        //Recibir el id que quiero editar
        $id = $_GET["id"];
        $nombre = $_POST["nombreEditar"];
        $descripcion = $_POST["descEditar"];

        //Consulta a la BD para editar un registro
        $consultaSQL = "UPDATE usuarios SET nombre='$nombre', descripcion='$descripcion' WHERE idUsuario='$id'";

        //Llamar el metodo editarUsuarios() de la clase BaseDatos
        $transaccion -> editarDatos($consultaSQL);

    }

    

?>