<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $var=7;

        /* while($var<6){

            echo "Estamos dentro del WHILE <br>";
            $var++;

        } */

        do{
            echo "Estamos dentro del DO-WHILE <br>";
            $var++;
        }while($var<6);

        //echo "Fuera del bucle WHILE";
        
        echo "Fuera del bucle DO-WHILE";

    ?>

    
</body>
</html>