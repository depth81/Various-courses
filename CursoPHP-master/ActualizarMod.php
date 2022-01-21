<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php    

$id = $_GET["id"];
$seccion = $_GET["seccion"];
$nombre = $_GET["nombre"];
$fecha = $_GET["fecha"];
$pais = $_GET["pais"];
$precio = $_GET["precio"];


require("datosConexion.php");

//1. Conexion por procedimientos
//$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

//Validar la conexion con la BD. Si no hay conexion se ejecuta la sgte fxn.
if(mysqli_connect_errno()){
    echo "No se puede conectar con la BD";
    exit(); //Salir del codigo PHP.
}

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");

//Para usar caracteres latinos como las tildes.
mysqli_set_charset($conexion, "utf8");

//Realizar una consulta a la BD
$consulta = "UPDATE artículos SET ID=$id, SECCION='$seccion',NOMBREARTICULO='$nombre',FECHA='$fecha',PAISDEORIGEN='$pais',PRECIO=$precio WHERE ID= $id";
/*$resultados es una tabla virtual creada en memoria con los datos de la consulta.
Es un resultset o recordset */
$resultados = mysqli_query($conexion, $consulta);

if(!$resultados){
    echo "Error en la consulta";
}
else{
    echo "Registro guardado <br><br>" ;

    echo "<table><tr><td>$id</td></tr>";

    echo "<tr><td>$seccion</td></tr>";

    echo "<tr><td>$nombre</td></tr>";

    echo "<tr><td>$fecha</td></tr>";

    echo "<tr><td>$pais</td></tr>";

    echo "<tr><td>$precio</td></tr></table>";
}

//Cerrar la conexion con la BD. Se usa una vble $conexion por cada BD a la que quiera conectarme.
mysqli_close($conexion);

?>

</body>
</html>