<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        
        $var1 = true;
        $var2 = false;
        $resultado = $var1 && $var2; //$resultado=false
        //$resultado = $var1 and $var2; 
        //$resultado=true, Primero se evalua $resultado=true (lo que hay en $var1)

        if($resultado){
            echo "Correcto";
        }
        else{
            echo "Incorrecto";
        }

    ?>


</body>
</html>