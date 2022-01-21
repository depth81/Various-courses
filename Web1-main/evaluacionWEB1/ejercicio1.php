<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@600;700&display=swap" rel="stylesheet"> 
    <title>Ejercicio#1</title>

    <style>
        body{
            font-family: 'Baloo Tammudu 2', cursive;
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
    </style>

</head>
<body>


    <h2>OPERACIONES ARITMÉTICAS</h2>

    <form action="ejercicio1.php" method="POST">
        <div class="form-row">
            <div class="col-3">
            <input type="number" class="form-control" placeholder="Operador 1" name="operador1" required>
            </div>
            <div class="col-3">
            <input type="number" class="form-control" placeholder="Operador 2" name="operador2" required>
            </div>
        </div>
        <br/>
    
        <div><label class="radio-inline"><input type="radio" name="operacion" value="suma" required> Suma</label></div> 
        <div><label class="radio-inline"><input type="radio" name="operacion" value="resta" required> Resta</label></div> 
        <div><label class="radio-inline"><input type="radio" name="operacion" value="multiplicacion" required> Multiplicación</label></div> 
        <div><label class="radio-inline"><input type="radio" name="operacion" value="division" required> División</label><br></div> 
        
        <input type="submit" value="Enviar" class="btn btn-primary" name="botonEnvio">
    </form>
    <br>

    <?php if(isset($_POST["botonEnvio"])):?>
                
                <h4>

                    <?php 
                    
                        $operador1 = $_POST["operador1"];
                        $operador2 = $_POST["operador2"];
                        $operacion= $_POST["operacion"];

                        if($operacion=="suma"){
                            $suma=$operador1+$operador2;
                            echo("La suma es: {$suma}");
                        }
                        else if($operacion=="resta"){
                            $resta=$operador1-$operador2;
                            echo("La resta es: {$resta}");
                        }
                        else if($operacion=="multiplicacion"){
                            $multiplicacion=$operador1*$operador2;
                            echo("La multiplicación es: {$multiplicacion}");
                        }
                        else{
                            if($operador2 != 0){
                                $division = $operador1/$operador2;
                                echo("La division es: {$division}");
                            }
                            else{
                                echo('No es posible la division entre cero (0)');
                            }
                    
                            
                        }
                    
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