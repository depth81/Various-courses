<?php

/* $producto1 = "Arroz";
$producto2 = "Atun";
$producto3 = "Apio";
$producto4 = "Pollo"; */

//ARREGLO INDEXADO. Los nombres de cada elemento son índices o números.
$productos = array("Arroz","Atun","Apio","Pollo");

/* print_r($productos); //Usar mejor este para mostrar todo el arreglo.
echo("<br>");
echo($productos[1]); //Usar mejor este para imprimir un elemento del arreglo. */

//Tengo un formulario y recibo los datos con el mensajero _POST
//$productosFormulario=array($_POST["producto1"],$_POST["producto2"]);


/*** ARREGLOS ASOCIATIVOS clave (user defined) => valor ***/
echo("<br>");
$productosAsociados = array('producto1' => "Arroz", 'producto2' => "Atun", 
'producto3' => "Apio", 'producto4' => "Pollo");

/* print_r($productosAsociados);
echo("<br>");
echo($productosAsociados['producto4']);  */

echo("<br>");
$numeros = array(1,2,3,4,5,6,7,8,9,10);
/* var_dump($numeros);
var_dump($productosAsociados); */

/* for($i=0; $i<10;$i++){
    echo($numeros[$i]);
    echo "<br>";
} */

foreach($numeros as $valor){

    /* echo($valor);
    echo('...<br>'); */

    if($valor>=3 && $valor<=9){
        echo($valor);
        echo('<br>');
    }

}

echo('<br>');

//Recorrer un array() asociativo.
foreach($productosAsociados as $clave=>$valor){

    echo($valor);
    echo('<br>');

}

echo('<br>');

$arreglo=array();
foreach($productosAsociados as $clave=>$valor){

    $arreglo[]=$valor;
    echo($valor);
    echo('<br>');

}

?>

