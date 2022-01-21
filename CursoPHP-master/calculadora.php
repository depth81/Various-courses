<style>

    .resultado{
        color: #F00;
        font-weight: bold;
        font-size: 32px;
    }


</style>

<?php

  /* Se ha presionado el botón "Enviar"? _POST es una variable superglobal (Array) */
  function calcular($calculo){

    global $numero1;
    global $numero2;

    if(!strcmp("Suma",$calculo)){
        $resultado = $numero1 + $numero2;
        echo "<p class='resultado'> El resultado es: $resultado </p>";
      }
      if(!strcmp("Resta",$calculo)){
        echo "El resultado es: " . ($numero1 - $numero2);
      }
      if(!strcmp("Multiplicación",$calculo)){
        echo "El resultado es: " . ($numero1 * $numero2);
      }
      if(!strcmp("División",$calculo)){
        echo "El resultado es: " . ($numero1 / $numero2);
      }
      if(!strcmp("Módulo",$calculo)){
        echo "El módulo es: " . ($numero1 % $numero2);
      }
      if(!strcmp("Incremento",$calculo)){
        $numero1++;
        $resultado = $numero1;
        echo "El incremento es: " . ($resultado);
      }
      if(!strcmp("Decremento",$calculo)){
          $numero1--;
          $resultado = $numero1;
        echo "El decremento es: " . ($resultado);
      }
  } 

?>