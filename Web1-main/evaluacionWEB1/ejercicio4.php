<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Ejercicio#4</title>
    
    <style>
        body{
            font-family: 'Architects Daughter', cursive;
            background-color: #F6CEF5;
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
        div img{
            background-color: #e619e5;
        }
    </style>

</head>
<body>

    <div class="col-12 text-center">
        <img src="logo.png" alt="" class="img-thumbnail rounded">
    </div>

    <div class="container">

        <form action="ejercicio4.php" method="POST">
            <div class="form-row">
                <div class="col-6">
                <input type="number" class="form-control" placeholder="Horas trabajadas" id="horasTrabajadas" name="horasTrabajadas" onkeyup="enabletext()" required>
                </div>
                <div class="col-6">
                <input type="number" class="form-control" placeholder="Horas extras" id="horasExtras" name="horasExtras" required disabled>
                </div>
            </div>
            <br/>
                        
            <input type="submit" value="Enviar" class="btn btn-info" name="botonEnvio" >
        </form>
            
    </div>

    
    <br>

    <?php if(isset($_POST["botonEnvio"])):?>
                
        <h4>

            <?php 
            
                $horasTrabajadas = $_POST["horasTrabajadas"];

                if($horasTrabajadas<=40){
                    $salario = $horasTrabajadas*20000;
                    $horasExtras=0; 
                    echo("Tu salario es de {$salario} pesos y no tienes derecho a horas extras.");
                }
                else{
                    $horasExtras = $_POST["horasExtras"];
                    $salario = $horasTrabajadas*20000 + $horasExtras*25000;
                    echo("Tu salario es de {$salario} pesos incluyendo {$horasExtras} horas extras");
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

<script type="text/javascript"> 

        function enabletext(){
            var horasTrabajadas = document.getElementById("horasTrabajadas").value;
            if(horasTrabajadas>40){
                document.getElementById("horasExtras").disabled = false;
            }else{
                document.getElementById("horasExtras").disabled = true;
            }

        }
        
</script>