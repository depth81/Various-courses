<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segunda página</title>
</head>
<body>
    

    <?php

        $nombre = "Paulo";
        $edad = 39;

        print "El nombre del usuario es: " . $nombre . "<br>";
        print "La edad de $nombre es $edad <br>";
        echo $nombre . " " . $edad . "<br>";
        echo $nombre, $edad; 
        /*Esto no lo admite "print".
        Para imprimir en pantalla es mejor usar "echo" */

    ?>

</body>
</html>