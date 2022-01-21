<?php

    class BaseDatos{

        //Atributos (variables)
        public $usuarioBD = "root";
        public $passwordBD = "";

        //Metodo constructor
        public function __construct(){}

        //Metodos (funciones)
        public function conectarBD(){

            /* Necesito la clase PDO. "this": En esta clase hay un elemento que se llama xxx entonces dede buscar en todos los bloques de la clase estas variables.
            $this reemplaza el signo $ delante de las variables */

            //Manejo de excepciones
            try{

                $datosBD = "mysql:host=localhost; dbname=bd_tiendajueves";
                $conexionBD = new PDO($datosBD, $this->usuarioBD, $this->passwordBD);
               //echo("EXITO!");
                return($conexionBD);

            }catch(PDOException $e){

                echo($e -> getMessage());

            }

        }

        public function agregarDatos($consultaSQL){

            //Conectarse a la BD. conectarBD retorna la conexion y la almaceno en una variable dentro de este metodo
            $conexionBD = $this -> conectarBD();

            //Preparar la consulta. $conexionBD es un objeto tipo PDO que tiene un metodo prepare()
            $insertarDatos = $conexionBD -> prepare($consultaSQL);

            //Ejecutar la consulta (insertar datos)
            $resultado = $insertarDatos -> execute();

            //Verificar el resultado
            if($resultado){
                echo("Registro insertado con exito");
            }else{
                echo("Error. No se pudo agregar el registro");
            }

        }//END agregarDatos()

        
        public function consultarDatos($consultaSQL){

            //Conectarse a la BD. conectarBD retorna la conexion y la almaceno en una variable dentro de este metodo
            $conexionBD = $this -> conectarBD();

            //Preparar la consulta. $conexionBD es un objeto tipo PDO que tiene un metodo prepare()
            $consultarDatos = $conexionBD -> prepare($consultaSQL);

            //Indicar la forma de devolver los datos: (Arreglo multidimensional) o establecer el método de consulta.
            $consultarDatos -> setFetchMode(PDO::FETCH_ASSOC);

            //Ejecutar la operacion en la BD
            $consultarDatos -> execute();

            //Retornar los datos
            return($consultarDatos -> fetchAll());

        }//END consultarDatos()

        public function eliminarDatos($consultaSQL){

            //Conectarse a la BD. conectarBD retorna la conexion y la almaceno en una variable dentro de este metodo
            $conexionBD = $this -> conectarBD();

            //Preparar consulta
            $eliminarDatos = $conexionBD -> prepare($consultaSQL);

            //Ejecutar la consulta
            $resultado = $eliminarDatos -> execute();

            if($resultado){
                echo("Registro eliminado con exito");
            }else{
                echo("Error. No se pudo elimnar el registro");
            }

        }//END eliminarDatos()

        public function editarDatos($consultaSQL){

            //Conectarse a la BD. conectarBD retorna la conexion y la almaceno en una variable dentro de este metodo
            $conexionBD = $this -> conectarBD();

            //Preparar consulta
            $editarDatos = $conexionBD -> prepare($consultaSQL);

            //Ejecutar la consulta
            $resultado = $editarDatos -> execute();

            if($resultado){
                echo("Registro editado con exito");
            }else{
                echo("Error. No se pudo editar el registro");
            }

        }//END editarDatos()


    }//END Class BaseDatos

?>