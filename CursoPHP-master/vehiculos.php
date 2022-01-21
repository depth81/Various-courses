<?php

class Coche{

    //Ruedas: Propiedad o atributo
    //'private' hace la propiedad accesible solamente desde dentro de la clase.
    //private $ruedas;

    //'protected' la hace visible desde las clases que heredan de Coche. (Camion)
    protected $ruedas;

    //'var' es pública. Public es el modificador por defecto.
    var $color;

    protected $motor;

    /* Método Constructor de clase: Define el estado inicial de los objetos.
    Lleva el mismo nombre que la clase. */

    function Coche(){

        //$this hace referencia a la propia clase (Coche).
        $this-> ruedas = 4;
        
        $this -> color = '';
        
        $this -> motor = 1600;

    }

    function getRuedas(){

        return $this -> ruedas;

    }

    function getMotor(){

        return $this -> motor;

    }

    /* Comportamientos o métodos (funciones dentro de una clase).
    Lo que los objetos o instancias de clase son capaces de hacer. */
    function arrancar(){

        echo('Estoy arrancando <br>');

    }

    function girar(){

        echo('Estoy girando <br>');

    }

    function frenar(){

        echo('Estoy frenando <br>');

    }

    function setColor($colorCoche, $nombreCoche){

        $this -> color = $colorCoche;

        echo('El color del ' . $nombreCoche . ' es: ' . $this -> color . '<br>');

    }

}


/***************************************************************************/


//Heredar métodos y propiedades de la clase Coche.
class Camion extends Coche{

    /* Método Constructor de clase: Define el estado inicial de los objetos.
    Lleva el mismo nombre que la clase. */

    function Camion(){

        //$this hace referencia a la propia clase (Coche).
        $this-> ruedas = 8;
        
        $this -> color = 'Gris';
        
        $this -> motor = 3600;

    }

    function setColor($colorCamion, $nombreCamion){

        $this -> color = $colorCamion;

        echo('El color del ' . $nombreCamion . ' es: ' . $this -> color . '<br>');

    }

    function arrancar(){
        
        /* En este método de la clase camión, se ejecuta todo el código de 
        la clase padre (Coche) */
        parent::arrancar();

        echo("Camión en marcha");

    }

}

?>