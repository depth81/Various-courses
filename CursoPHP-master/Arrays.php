<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

<?php

    /* //Crear un array indexado. php permite NO indicar el índice.
    $semana[] = 'Lunes';  //lo asume automáticamente como la posición 0.
    $semana[] = 'Martes';
    $semana[] = 'Miércoles';
    $semana[] = 'Jueves';
    $semana[] = 'Viernes';
    $semana[] = 'Sábado';
    $semana[] = 'Domingo'; //lo asume automáticamente como la posición 6.

    echo($semana[1]); */

    /* //Declaración alternativa.
    $semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');

    echo($semana[3]); */

    //ARRAY ASOCIATIVO -> Identificar cada posición del array con un nombre.
    $datos = array('Nombre' => 'Paulo', 'Apellido' => 'Toro', 'Edad' => 39); 

    //Agregar elementos a un array[] asosciativo
    $datos['País'] = 'Colombia';

    //$datos = 67;

    //echo($datos['Apellido']);   //Imprime 'Toro'

    //Un nombre es un array?
    /* if(is_array($datos)){

        echo('Sí es un array[]!');

    }else{

        echo('NO es un array[]!');

    } */

    //Recorrer un array[] asociativo.
    foreach($datos as $clave => $valor){

        echo "A $clave le corresponde $valor <br>";

    }

    //Crear un array indexado. 
    /* $semana[] = 'Lunes';  //lo asume automáticamente como la posición 0.
    $semana[] = 'Martes';
    $semana[] = 'Miércoles';
    $semana[] = 'Jueves';
    
     //Recorrer un array[] indexado con un ciclo 'for'.
     //'Count' cuenta los elementos del array[]
    for($i=0;$i<count($semana);$i++){

        echo $semana[$i].'<br>';

    } */

    /* //Agregar un elemento a un aray[] indexado al final del mismo.
    $semana[] = 'Viernes';  

     //Recorrer un array[] indexado con un ciclo 'for'.
    for($i=0;$i<count($semana);$i++){

        echo $semana[$i].'<br>';

    } */


    
    $semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');

    //Ordenar los elementos de un array[]. Se usa la función 'sort'.
    sort($semana);

    for($i=0; $i<count($semana);$i++){

        echo $semana[$i] . '<br>';

    }
    

?>
    
</body>
</html>