<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet"> 
    <title>Ejercicio#3</title>

    <style>
        body{
            font-family: 'Architects Daughter', cursive;
            background-color: #def1f5;
        }
        h2{
            padding-top: 17px;
            margin-bottom: 15px;

        }
        h4{
            color: #e619e5;
            margin-top: 10px;
        }
        h1{
            margin-top: 20px;
        }
        img{
            width: 200px;
            height: 200px;
            text-align: center;
            margin-bottom: 20px;
        }
        .container{
            text-align: center;
            border: 2px solid #999;
            padding: 10px;
        }

    </style>

</head>
<body>

    <head>
        <img src="springstep.jpg" alt="" class="rounded mx-auto d-block">
    </head>

        <div class="container">

            <form action="ejercicio3.php" method="POST">
            <div class="form-row">
                <div class="col-6">
                <input type="number" class="form-control" placeholder="Pares de zapatos" name="numPares" min="1" step="1" title="Ingrese al menos un par de Zapatos" required>
                </div>
                <div class="col-6">
                <input type="number" class="form-control" placeholder="Mayor o igual a COP 10,000" name="precio"  min="10000" title="Mayor o igual a COP 10,000" required>
                </div>
            </div>
            <br/>
                        
            <input type="submit" value="Enviar" class="btn btn-success" name="botonEnvio">
        </form>

        </div>

    
    <br>

    <?php if(isset($_POST["botonEnvio"])):?>
                
        <h4>

            <?php 
            
                $numPares = $_POST["numPares"];
                $precio = $_POST["precio"];
                $valorTotal = ($numPares*$precio)*1.16;
                $dcto=0;

                    
                    if($numPares == 3){
                        $dcto = $valorTotal*0.1;
                    }
                    else if($numPares > 3 && $numPares <= 8){
                        $dcto = $valorTotal*0.2; 
                    }
                    else if($numPares > 8){
                        $dcto = $valorTotal*0.5; 
                    }
                    else{
                        echo("No tienes descuento." . "<br>");
                    }

                $valorFinal = $valorTotal - $dcto; 
                echo("El descuento después del IVA es: {$dcto} y el valor total de la compra es {$valorFinal}");

            ?>

        </h4>

    <?php endif ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>