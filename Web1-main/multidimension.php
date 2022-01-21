<?php



    //UNIDIMENSIONAL******************
    /* $precios = array(1600, 4600, 1000);

    foreach($precios as $valores){
        echo($valores);
        echo("<br>");
    }

    echo("<br>");

    print_r($precios); */


    //MULTIDIMENSIONAL*****************

    $productos = array(

        "producto1" => array("arroz", 1600, "Caribe"),
        
        "producto2" => array("aceite", 5600 ,"premier"),

        "producto3" => array("sal", 1000, "Refisal"),

    );

    print_r($productos);

    echo("<br>");

    /* echo($productos[1][2]);

    echo("<br>"); */

    //Recorrer un arreglo multidimensional.
    /* foreach($productos as $valores){
        
        echo($valores[0]);
        
        echo("<br>"); 

    } */

?>