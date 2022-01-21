<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    /* function suma($num1, $num2){

        $resultado = $num1 + $num2;

        return $resultado;

    }

    echo(suma(5, 7)); */

    //Parámetro o argumento por defecto
    function fraseMayus($frase,$conversion=true){

        $frase = strtolower($frase);

        if($conversion==true){

            $resultado = ucwords($frase);

        }else{

            $resultado = strtoupper($frase);

        }

        return $resultado;

    }

    echo(fraseMayus("esto es una prueba",false));

?>

</body>
</html>