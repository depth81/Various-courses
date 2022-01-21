<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Ejercicio#5</title>

    <style>

       h1{
            text-align: center;
            background-color: #C0DCB5;
            width: 50%;
            margin: auto;
            padding: 15px;
            margin-bottom: 30px;
        }
 
    </style>

</head>
<body>


    <h1>BANCO</h1>

        <form action="ejercicio5.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="nombre">Nombre1</label>
                <input type="text" class="form-control" id="nombre" name="nombre[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="telefono">Teléfono1</label>
                <input type="number" class="form-control" id="telefono" name="telefono[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="direccion">Dirección1</label>
                <input type="direccion" class="form-control" id="direccion" name="direccion[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="salario">Salario1</label>
                <input type="number" class="form-control" id="salario" name="salario[]" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="nombre">Nombre2</label>
                <input type="text" class="form-control" id="nombre" name="nombre[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="telefono">Teléfono2</label>
                <input type="number" class="form-control" id="telefono" name="telefono[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="direccion">Dirección2</label>
                <input type="direccion" class="form-control" id="direccion" name="direccion[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="salario">Salario2</label>
                <input type="number" class="form-control" id="salario" name="salario[]" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="nombre">Nombre3</label>
                <input type="text" class="form-control" id="nombre" name="nombre[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="telefono">Teléfono3</label>
                <input type="number" class="form-control" id="telefono" name="telefono[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="direccion">Dirección3</label>
                <input type="direccion" class="form-control" id="direccion" name="direccion[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="salario">Salario3</label>
                <input type="number" class="form-control" id="salario" name="salario[]" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="nombre">Nombre4</label>
                <input type="text" class="form-control" id="nombre" name="nombre[]" required >
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="telefono">Teléfono4</label>
                <input type="number" class="form-control" id="telefono" name="telefono[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="direccion">Dirección4</label>
                <input type="direccion" class="form-control" id="direccion" name="direccion[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="salario">Salario4</label>
                <input type="number" class="form-control" id="salario" name="salario[]" required>
                </div>
            </div>  
            <div class="form-row">
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="nombre">Nombre5</label>
                <input type="text" class="form-control" id="nombre" name="nombre[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="telefono">Teléfono5</label>
                <input type="number" class="form-control" id="telefono" name="telefono[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="direccion">Dirección5</label>
                <input type="direccion" class="form-control" id="direccion" name="direccion[]" required>
                </div>
                <div class="form-group col-md-3 col-form-label-lg">
                <label for="salario">Salario5</label>
                <input type="number" class="form-control" id="salario" name="salario[]" required>
                </div>
            </div>      
            <button type="submit" class="btn btn-primary" name="botonEnvio">Enviar</button>
        </form>


        <?php 

            //Declarar arreglos
            $nombre=array();
            $telefono=array();
            $direccion=array();
            $salario=array();

            $sumatoriaSalarios = 0;
            $sumatoriaB = 40000000;
            $sumatoriaC = 32000000;

            if(isset($_POST["botonEnvio"])){

                $nombre = $_POST['nombre'];
                $telefono = $_POST['telefono'];
                $direccion = $_POST['direccion'];
                $salario = $_POST['salario'];
                $sucursal = "";
            
                //Sumar los salarios de todos los usuarios de la sucursal A.
                for($i=0;$i<count($salario);$i++){

                    $sumatoriaSalarios += $salario[$i];
            
                } 

                echo("La sumatoria de los salarios de los usuarios de la sucursal A, es: {$sumatoriaSalarios} <br>");  

                //Calcular mayor sumatoria de salarios por sucursal.
                function mayorSumatoria($a, $b)
                {   
                    if($a>$b){
                        return $a;
                    }
                    else{
                        return $b;
                    }
                }

                $mayor1 = mayorSumatoria($sumatoriaSalarios, $sumatoriaB);
                $mayor = mayorSumatoria($mayor1, $sumatoriaC);

                switch ($mayor) {
                    case 40000000:
                        $sucursal="Sucursal B";
                        break;
                    case 32000000:
                        $sucursal="Sucursal C";
                        break;
                    default:
                        $sucursal="Sucursal A";
                        break;
                }

                echo("La sucursal con la mayor sumatoria de salarios es: {$sucursal} con un total de {$mayor} <br><br>");
                
                echo("Usuarios de la sucursal A <br>");

                //Imprimir los datos de los cinco (5) usuarios de la sucursal A.
                for($i=0;$i<count($nombre);$i++){

                    echo("Nombre : $nombre[$i], Telefono: $telefono[$i], Direccion: $direccion[$i], Salario: $salario[$i] <br>");

                }

            } 

        ?>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>