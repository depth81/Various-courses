<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion BD</title>

    <style>
    
        table{
            width: 50%;
            margin:auto; 
            border:1px dotted #FF0000;
        }
    
    </style>

</head>
<body>

    <?php

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
        //$consulta = "SELECT * FROM articulos";
        $consulta = "SELECT * FROM artículos WHERE PAISDEORIGEN = 'China'";
        
        /*$resultados es una tabla virtual creada en memoria con los datos de la consulta.
        resultset o recordset */
        $resultados = mysqli_query($conexion, $consulta);

        /* Ver la informacion almacenada en el resultset. Se lee linea a linea, si la llamo
        una vez solamente accede al primer registro, la segunda llamada accede al segundo registro, etc */
        //$fila = mysqli_fetch_row($resultados);

        //Solamente veo el primer registro de la tabla:
        //echo $fila[0] . " "; //CC
        //echo $fila[1] . " ";  //Nombre
        //echo $fila[2] . " ";  //Apellido
        //echo $fila[3] . " ";  //Edad

        //Hay informacion en la tabla virtual? Se pudo acceder a cada registro? entra al bucle
        //while(($fila = mysqli_fetch_row($resultados))){
        //Array asociativo
        while($fila = mysqli_fetch_array($resultados,MYSQLI_ASSOC)){

            echo "<table><tr><td>";

            /* echo $fila[0] . "</td><td>";
            echo $fila[1] . "</td><td>";
            echo $fila[2] . "</td><td>";
            echo $fila[3] . "</td><td>";
            echo $fila[4] . "</td><td></tr></table>"; */

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


    ?>


    
</body>
</html>