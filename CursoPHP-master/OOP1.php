<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    /* $renault es una instancia de clase u objeto. ''new' llama al método
    constructor de la clase para darle un estado inicial al objeto
    o instancia de clase. */
  /*   $renault = new Coche();   

    $mazda = new Coche();

    $seat = new Coche();

    $renault -> estableceColor('Rojo','Renault');

    $seat -> estableceColor('Azul', 'Seat'); */

    //Hacer que el mazda gire. girar() ta tiene el 'echo' incluido.
    //$mazda -> girar();

    //echo($mazda->ruedas);

    include('vehiculos.php');

    $mazda = new Coche();

    $pegaso = new Camion();

    echo('El Mazda tiene ' . $mazda -> getRuedas() . ' ruedas <br>');

    echo('El Pegaso tiene ' . $pegaso -> getRuedas() . ' ruedas <br>');

    echo('El Mazda tiene un motor de: ' . $mazda -> getMotor() . ' cm3 <br>')

?>
    
</body>
</html>