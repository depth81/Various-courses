<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $num1=rand();
        echo "El número es: " . $num1 . "<br>";

        //Aleatorio entre 10 y 50
        $num2=rand(10,50);
        echo "El número es: " . $num2 . "<br>";

        //potenciación
        $num3=pow(5,3);
        echo "El número es: " . $num3 . "<br>";

        //redondear
        $num4 = 5.25;
        echo "El número es: " . round($num4) . "<br>";
        
        //Redondear a dos decimales
        $num5 = 5.7545678;
        echo "El número es: " . round($num5,2) . "<br>";

        //Casting EXPLÍCITO

        $num6 = "5";
        $num7 = (int)$num6;
        echo "El número es: " . $num7;

    ?>

</body>
</html>