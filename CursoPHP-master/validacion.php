
<style>
	
    h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}

</style>

  <?php
    
    //Comprobar que se ha pulsado el botón "Enviar"
    if(isset($_POST["enviando"])){

      /*$_POST se conoce como una variable superglobal (son arrays [])
      Almacenar lo que se ha introducido en los campos del formulario.*/
      $usuario = $_POST["nombre_usuario"];
      $edad = $_POST["edad_usuario"];

      if($usuario=="Paulo" && $edad>=18){
        echo "<p class='validado'>Puedes entrar</p>";
      }
      else{
        echo "<p class='no_validado'>" . "Acceso restringido" . "</p>";
      }

    }

  ?> 