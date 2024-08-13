<?php
$controlador = new controladorPaquete();
if(isset($_POST['registrar'])){
    $r=$controlador->crear($_POST['tipo_paquete'],$_POST['caracteristicas'],$_POST['costo']);
if($r){
echo "
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
        window.location.href='?cargar=crearPaquete';
    }else{
        window.location.href='?cargar=inicioPaquete';
    }    
</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Paquetes</title>
    <style>  
        .container1 {
            margin: center;
            padding: 20px;
            background-color: #212529;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .form-group label {
            color: #61dafb;
        }
        .btn-primary {
            background-color: #61dafb;
            border-color: #61dafb;
        }
    </style>
</head>
<body>
    <div class="container-fluid ">
        <h1 class="text-center"><b>Registro de Paquetes</b></h1>
        <div class="container1 container-fluid">
            <form method="post" action="">
                <div class="form-group mb-3">
                    <label for="tipo_paquete">Tipo:</label>
                    <input type="text" class="form-control" id="tipo_paquete" name="tipo_paquete" placeholder="Ingresa el tipo de paquete" 
                    pattern="[a-zA-ZÀ-ÿ\u00f1\u00d1\s]+" 
                    oninvalid="this.setCustomValidity('Solo se aceptan letras y espacios.')" 
                    oninput="this.setCustomValidity('')" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="caracteristicas">Características:</label>
                    <input type="text" class="form-control" id="caracteristicas" name="caracteristicas" placeholder="Ingresa las caracteristicas" autofocus required>
                </div>
                <div class="form-group mb-3">
    <label for="costo">Costo:</label>
    <input type="number" class="form-control" id="costo" name="costo" placeholder="Ingresa el costo"
           oninvalid="this.setCustomValidity('Solo se aceptan números.')" 
           oninput="this.setCustomValidity('')" 
           autofocus required>
               </div>
                <button type="submit" class="btn btn-primary btn-block" name="registrar">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>