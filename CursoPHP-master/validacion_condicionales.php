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

		if(isset($_POST["enviando"])){
		
		//$contra = $_POST["contra"]; 
		$edad=$_POST["edad_usuario"];
		$nombre = $_POST["nombre_usuario"];

		/* switch(true):
			case $nombre=="Juan" && $contra=="1234":
				echo "Usuario Autorizado. Hola Juan!";
			break;
			case $nombre=="María" && $contra=="5555":
				echo "Usuario Autorizado. Hola María!";
			break;
			case $nombre=="Paulo" && $contra=="1111":
				echo "Usuario Autorizado. Hola Paulo!";
			break;
			default:
				echo "No autorizado";	
		endswitch; */

		switch(true){
			case $edad<=18:
				echo "Eres menor de edad";
			break;
			case $edad<=40:
				echo "Eres jóven";
			break;
			case $edad<=65:
				echo "Eres maduro";
			break;
			default:
				echo "Eres un adulto mayor";	
			};

		/* if($edad<=18){
			echo "Eres menor de edad";
		}
		else if($edad<=40){
			echo "Eres j&oacute;ven";
		}
		else if($edad<=65){
			echo "Eres maduro";
		}
		else{
			echo "Eres un adulto mayor";
		} */

	}
	/* 
	if(isset($_POST["enviando"])){

		$contra = $_POST["contra"];
		$nombre = $_POST["nombre_usuario"];

		echo $nombre == "Paulo" && $contra == "1234" ? "Puedes acceder" : "Acceso restringido!";

	} */
	
?>