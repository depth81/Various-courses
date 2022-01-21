<?php   

    include("BaseDatos.php");

    //Crear el objeto tipo BaseDatos
    $transaccion = new BaseDatos();


    //Recibir datos

    if(isset($_POST["botonEditar"])){

        //Recibir el id que quiero editar
        $id = $_GET["id"];
        $MarcaProd = $_POST["marcaProdEditar"];
        $PrecioProd = $_POST["precioProdEditar"];
        $Descripcion = $_POST["DescEditar"];

        //Consulta a la BD para editar un registro
        $consultaSQL = "UPDATE productos SET MarcaProducto='$MarcaProd', PrecioProducto='$PrecioProd', Descripcion='$Descripcion' WHERE idProducto='$id'";

        //Llamar el metodo editarUsuarios() de la clase BaseDatos
        $transaccion -> editarDatos($consultaSQL);

        //Redireccionar
        header("location:listarProductos.php");

    }

    

?>