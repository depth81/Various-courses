<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>tiendaWEB1</title>

    <style>

        header h1{
            text-align: center;
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link active" href="formularioRegistro.php">Registrar productos</a>
        <a class="nav-link active" href="listarProductos.php">Listar Productos</a>
        </div>
    </div>
    </nav>

    <br>
    
    <header>
        <h1>REGISTRO DE PRODUCTOS</h1>
        <hr>
    </header>

    <main> 
        <div class="container">
            <form action="registrarProductos.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="NombreProducto" name="NombreProducto">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="MarcaProducto" name="MarcaProducto">
                    </div>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="PrecioProducto" name="PrecioProducto">
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Descripcion" name="Descripcion" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Fotografia:</label>
                    <input type="text" class="form-control" placeholder="URL FOTOGRAFIA" name="Foto">
                </div>

                <br>
                <div class="col text-center">
                    <button type="submit" class="btn btn-info" name="botonEnvio">Registrar</button>
                </div>        
            </form>
        </div>
    </main>
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>