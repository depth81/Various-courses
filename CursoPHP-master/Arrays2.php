<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Multidimensionales</title>
</head>
<body>

    <?php

        //Crear array[] asociativov multidimensional.
        $alimentos = array("Fruta" => array("Tropical"=>"Kiwi",
                                            "Cítrico" => "Mandarina",
                                            'Otros' => 'Manzana'),
                            "Leche" => array("Animal"=>"Vaca",
                                            "Vegetal"=>"Coco"), 
                            "Carne" => array("Vacuno"=>"Lomo",
                                            "Porcino" => "Pata"));
        
        //Acceder a un elemento de la primera dimensión.
        echo $alimentos["Carne"]["Vacuno"]."<br>"."<br>";  //Imprime 'Lomo'.

        //Recorrer el array[] multidimensional. Usar la función 'list'.
        /* foreach($alimentos as $clave_alim=>$alim){

            echo "$clave_alim:<br>";

            //Desdoblar array[] de la segunda dimensión.
            while(list($clave,$valor)=each($alim)){

                //Doble comilla para que dentro del string reconozca las variables.
                echo "$clave=$valor<br>";

            }

            echo "<br>";

        } */

        //var_dump. Equivalente al foreach anterior.
        var_dump($alimentos);

    ?>
    
</body>
</html>