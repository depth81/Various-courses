<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        /* for($i=0;$i<=10;$i++){

            echo "<p> Hemos entrado en el bucle FOR </p>";

        } */

        
        /* for($i=10;$i>=0;$i--){

            echo "<p> Hemos entrado en el bucle FOR </p>";

        } */

       /*  for($i=0;$i<=20;$i+=2){

            echo "<p> Hemos entrado en el bucle FOR </p>";

            //Salir del bucle a la fuerza (anticipadamente) cuando $i==6
            if($i==6){
                echo "<p> Bucle FOR interrumpido </p>";
                break;
            }

        } */

        /* for($i=0;$i<=10;$i++){

            echo "9 x $i = " . 9 * $i . "<br>";

        } */

        for($i=10;$i>=-10;$i--){

            //Cuando $i==0, no quiero ejecutar el bucle (zero division)
            if($i==0){
                echo "División entre cero (0) <br>";
                continue; 
                /* NO realiza la sgte instrucción (echo "X"). 
                No se ejecuta la siguiente iteración. */
            }

            echo "9 / $i = " . 9 / $i . "<br>";

        }

        echo "Hemos salido del bucle FOR";

    ?>
    
</body>
</html>