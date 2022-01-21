<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>

    <style>
        .resaltar{
            color: #F00;
            font-weight: bold;
        }
    </style>

</head>
<body>
    
        <?php

            $nombre = "Paulo";

            echo "<p class='resaltar'> Esto es una frase de ejemplo </p>";
            //escapar el carácter " con \ (no hace parte del string)
            echo "<p class=\"resaltar\"> Esto es otra frase de ejemplo </p>";
            echo "Hola $nombre <br>";
            //'' toma como literal lo que hay adentro. No reconoce variables.

            /* Comparar strings: strcmp (case sensitive) y strcasecmp (case insensitive). */

            $variable1 = "Casa";
            $variable2 = "CASA";
            $resultado = strcmp($variable1, $variable2);
            
            // devuelve 1 si NO  son iguales, 0 si son iguales.
            //echo "El resultado es " . $resultado . "<br>";

            if (!$resultado){
                echo "Sí coinciden <br>";
            }
            else{
                echo "No coinciden <br>";
            }
            
            // devuelve 0:
            $resultado2 = strcasecmp($variable1,$variable2);
            
            if ($resultado2){
                echo "No coinciden <br>";
            }
            else{
                echo "Sí coinciden <br>";
            }
            
            //echo "El resultado es " . $resultado2;

        ?>

</body>
</html>