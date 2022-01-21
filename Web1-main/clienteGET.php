<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
    <title>Metodo GET</title>
</head>
<body>
    
    <header>
    <h1>Metodo GET</h1>
    </header>

    <main>
        
    <div class="container">
        <form action="servidorGET.php" method="GET">
            <div class="row">
                <div class="col">
                <input type="text" class="form-control" placeholder="usuario" name="usuario">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="botonPOST">Submit</button>
            </div>
        </form>
    </div>

    </main>

    


<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>