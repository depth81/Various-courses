<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");

	/* Referencia a un campo estático desde fuera de la propia clase a la que
	este campo pertenece. */
	
	//Compra_vehiculo::$ayuda=10000;

	Compra_vehiculo::dctoGobierno();	
	
	$compra_Antonio=new Compra_vehiculo("compacto");
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco");
	
	echo $compra_Antonio->precio_final() . "<br>";
	
	$compra_Ana=new Compra_vehiculo("compacto");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");
	
	echo $compra_Ana->precio_final();
	
	
	
	


?>
</body>
</html>