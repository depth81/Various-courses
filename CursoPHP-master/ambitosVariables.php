<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambitos de variables</title>
</head>
<body>
    
    <?php

        $nombre = "Paulo";

        function dameNombre(){

            //Convertir a $nombre en una variable global
            global $nombre;

            $nombre = "El nombre es " . $nombre;
            //Esta variable $nombre es diferente a la que hay afuera de la función.

        }

        dameNombre();

        /* Esta línea no puede acceder a $nombre dentro de la función. Se imprime "Paulo" si esta no se hace global*/
        echo $nombre;

    ?>

</body>
</html>