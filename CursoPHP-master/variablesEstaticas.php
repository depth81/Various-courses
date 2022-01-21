<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables estáticas</title>
</head>
<body>

    <?php

        function incrementaVariable(){
            /* La línea de la variable estática es ejecuta solamente la primera vez que llamo a la función, además, cuando la función finaliza, el valor de la variable se conserva. */
            static $contador = 0;
            $contador++;
            echo $contador . "<br>";
        }

        /* Cuando se termina le ejecución de una función, el valor de todas las variables internas se destruye. Se declara como estática para conservar el valor al salir del ámbito de la función  */

        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();

    ?>
    
</body>
</html>