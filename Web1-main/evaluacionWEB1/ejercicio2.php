<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@600;700&family=Roboto:wght@500&display=swap" rel="stylesheet"> 
    


<script type="text/javascript">

    function validar(){
        altura = document.getElementById("altura").value;

        if(altura % 1==0){
            alert("Formato no válido. Por favor introduce tu altura en metros");
        }

    }

</script>


    
    <title>Ejercicio#2</title>

    <style>
        body{
            font-family: 'Roboto', sans-serif;
            background-color: #d8dbdc;
        }
        h2{
            padding-top: 17px;
            margin-bottom: 15px;
        }
        h4{
            color: #1e32d9;
            margin-top: 10px;
        }
    </style>

</head>
<body>


    <h2>ÍNDICE DE MASA CORPORAL (IMC)</h2>

    <form action="ejercicio2.php" method="POST">
        <div class="form-row">
            <div class="col-3">
            <input type="number" class="form-control" placeholder="Peso" name="peso" id="peso" min="40" max="250" title="Ingresa un peso entre 40Kg y 250Kg" required>
            </div>
            <div class="col-3">
            <input type="number" step="any" class="form-control" placeholder="Altura(m)"name="altura" id="altura" min="0.50" max="2.50" title="Ingresa una altura entre 0.50m y 2.50m" required>
            </div>
        </div>
        <br/>
                    
        <input type="submit" value="Enviar" class="btn btn-primary" name="botonEnvio" id="botonEnvio" onblur="validar()">
    </form>
    <br>

    <?php if(isset($_POST["botonEnvio"])):?>
                
                <h4>

                    <?php 
                    
                        $peso = $_POST["peso"];
                        $altura = $_POST["altura"];

                        $IMC= $peso / pow($altura,2);

                        if($IMC < 18.5){
                            echo("Peso insuficiente");
                        }
                        else if($IMC >= 18.5 && $IMC < 25){
                            echo("Normopeso");
                        }
                        else if($IMC >= 25 && $IMC < 27){
                            echo("Sobrepeso grado I");
                        }
                        else if($IMC >= 27 && $IMC < 30){
                            echo("Sobrepeso grado II (preobesidad)");
                        }
                        else if($IMC >= 30 && $IMC < 35){
                            echo("Obesidad de tipo I");
                        }
                        else if($IMC >= 35 && $IMC < 40){
                            echo("Obesidad de tipo II");;
                        }
                        else if($IMC >= 40 && $IMC < 50){
                            echo("Obesidad de tipo III (mórbida)");;
                        }
                        else{
                            echo("Obesidad de tipo IV (extrema)");        
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