<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flujo de ejecucion</title>
</head>
<body>
    
    <?php

        echo "Este es el primer mensaje <br>";

        //declarar una función
        function dameDatos(){
            echo "Imprimir desde la función <br>";
            echo "Segunda impresión desde la función <br>";
        }

        dameDatos();

        echo "Este es el segundo mensaje <br>";
        dameDatos();
        dameDatos();
        echo "Este es el tercer mensaje";

    ?>

</body>
</html>