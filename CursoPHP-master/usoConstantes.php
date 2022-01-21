<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>

<?php

    //Definir una constante llamada "AUTOR" y asignarle "Paulo"
    define("AUTOR","Paulo");
    define("COMPOSITOR", "Enrique", true);
    define('Pi',3.1415);

    echo "El autor es: " . AUTOR . "<br>";
    //No funciona si lo pongo en minúsculas!!!
    echo "El compositor es: " . COMPOSITOR . "<br>"; 

    //Constantes predefinidas de PHP
    echo "La línea de esta instrucción es: " . __LINE__ . "<br>";
    echo "Estamos trabajando con el fichero: " . __FILE__ . "<br>";
    echo "El directorio del fichero es: " . __DIR__;

?>
    
</body>
</html>