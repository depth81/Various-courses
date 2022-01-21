<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    /* & -> El argumento que recibe es por referencia. Se crea una conexión o
    referencia con el orígen ($numero), hay una especia de vínculo o referencia,  entonces la función sí sabe qué hay por fuera de ella, así que cuando $valor1 aumenta, también se incrementa $numero (se modifica
    la referencia también). En el caso del paso de parámetros por valor, la función no conoce nada por fuera de ella, o sea que no conoce a $numero, solamente sabe que ahí hay un 5; al incrementar $valor no aumenta $numero.
    */ 

    /* function incrementa(&$valor1){

        $valor1++;

        return $valor1;

    }

    $numero = 5;

    echo(incrementa($numero) . '<br>');

    echo($numero); */

    function cambiaMayus(&$param){

        $param = strtolower($param);

        $param = ucwords($param);

        return $param;

    }

    $cadena = "hOlA mUnDo";

    echo(cambiaMayus($cadena) . '<br>');

    echo($cadena);



?>

</body>
</html>