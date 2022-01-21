<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de eliminación</title>
</head>
<body>

<style>

caption{
    color:red
}

</style>

    
<form name="form1" action="eliminarRegistros.php" method="GET">

    <table border="1">
    <caption><strong>ELIMINAR ARTÍCULOS</strong></caption>
    <tr>
        <td><label for="id">ID:</label> </td>
        <td><input type="number" name="id", id="id"></td>
    </tr>
    <tr>
        <td><label for="seccion">Sección:</label> </td>
        <td><input type="text" name="seccion", id="seccion"></td>
    </tr>
    <tr>
        <td><label for="nombre">Nombre del artículo:</label></td>
        <td><input type="text" name="nombre" id="nombre"></td>
    </tr>
    <tr>
        <td><label for="fecha">Fecha:</label></td>
        <td><input type="date" name="fecha" id="fecha"></td>
    </tr>
    <tr>
        <td><label for="pais">País de Orígen:</label></td>
        <td><input type="text" name="pais" id="pais"> </td>
    </tr>
    <tr>
        <td><label for="precio">Precio:</td>
        <td><input type="number" step="any" name="precio" id="precio"></td>
    </tr>
    <tr>
        <td><input type="submit" name="eliminar" value="ELiminar!"></td>
        <td><input type="reset" name="limpiar" value="Limpiar!"></td>
    </tr>
    
    </table>

</form>

</body>
</html>