<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de busqueda</title>

</head>
<body>

    <?php

        $busqueda = $_GET["buscar"];

        require("datosConexion.php");

        //1. Conexion por procedimientos
        //$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

        //Validar la conexion con la BD. Si no hay conexion se ejecuta la sgte fxn.
        if(mysqli_connect_errno()){
            echo "No se puede conectar con la BD";
            exit(); //Salir del codigo PHP.
        }

        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");

        //Para usar caracteres latinos como las tildes.
        mysqli_set_charset($conexion, "utf8");

        //Realizar una consulta a la BD
        //$consulta = "SELECT * FROM datospersonales";
        $consulta = "SELECT * FROM artículos WHERE ID = '$busqueda'";
        //$consulta = "SELECT * FROM artículos WHERE PAISDEORIGEN = 'China'";
        
        /*$resultados es una tabla virtual creada en memoria con los datos de la consulta.
        resultset o recordset */
        $resultados = mysqli_query($conexion, $consulta);

        //Array asociativo
        while($fila = mysqli_fetch_array($resultados,MYSQLI_ASSOC)){

            //echo "<table><tr><td>";

            echo "<form action='ActualizarMod.php' method='GET'>";

            echo "<input type ='number' step='any' name='id' value='" . $fila['ID']. "' ><br>";
            echo "<input type ='text' name='seccion' value='" . $fila['SECCION']. "' ><br>";
            echo "<input type ='text' name='nombre' value='" . $fila['NOMBREARTICULO']. "' ><br>";
            echo "<input type ='text' name='fecha' value='" . $fila['FECHA']. "' ><br>";
            echo "<input type ='text' name='pais' value='" . $fila['PAISDEORIGEN']. "' ><br>";
            echo "<input type ='number' step='any' name='precio' value='" . $fila['PRECIO']. "' ><br>";
            echo "<input type='submit' name='enviando' value='Actualizar!'> ";
            
            echo "</form>";

        }
        
        //Cerrar la conexion con la BD. Se usa una vble $conexion por cada BD a la que quiera conectarme.
        mysqli_close($conexion);

    ?>
    
</body>
</html>