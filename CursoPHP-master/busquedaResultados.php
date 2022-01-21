<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de resultados</title>

    <?php


        function ejecutaConsulta($laBusqueda){

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
            $consulta = "SELECT * FROM artículos WHERE NOMBREARTICULO LIKE '%$laBusqueda%'";
            //$consulta = "SELECT * FROM artículos WHERE PAISDEORIGEN = 'China'";
            
            /*$resultados es una tabla virtual creada en memoria con los datos de la consulta.
            resultset o recordset */
            $resultados = mysqli_query($conexion, $consulta);
    
            //Array asociativo
            while(($fila = mysqli_fetch_array($resultados,MYSQLI_ASSOC))){
    
                echo "<table><tr><td>";
    
                echo $fila['SECCION'] . "</td><td>";
                echo $fila['NOMBREARTICULO'] . "</td><td>";
                echo $fila['FECHA'] . "</td><td>";
                echo $fila['PAISDEORIGEN'] . "</td><td>";
                echo $fila['PRECIO'] . "</td><td></tr></table>";
    
                echo "<br>";
                echo "<br>";
    
            }
            
            //Cerrar la conexion con la BD. Se usa una vble $conexion por cada BD a la que quiera conectarme.
            mysqli_close($conexion);

        }//END ejecutaConsulta()

    ?>

</head>
<body>
    
    <?php

        @$miBusqueda = $_GET["buscar"];

        //indicar la pag del servidor que se tiene que llamar. (Ella misma en este caso)
        $miPag = $_SERVER["PHP_SELF"];

        if($miBusqueda != NULL){

            ejecutaConsulta($miBusqueda);

        }else{

            echo "<form action = '" . $miPag . "' method = 'GET'> 
            <label> Buscar: <input type = 'text' name = 'buscar'></label>
            <input type = 'submit' name = 'Enviando' value = 'Click!'> </form>";

        }

    ?>

</body>
</html>