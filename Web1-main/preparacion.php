<?php

    include('Sopa.php');

    //Crear un objeto de la clase (Los objetos son variables)
    $ajiaco = new Sopa();

    //acceder a un atributo
    $ajiaco -> cantidadAgua = "2 LITROS";
    echo($ajiaco -> cantidadAgua);

    echo("<br>");

    //acceder a métodos
    $ajiaco -> disfrutarSopa();

?>