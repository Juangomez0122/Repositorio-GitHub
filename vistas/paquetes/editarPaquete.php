<?php
    $controlador= new controladorPaquete();
    if(isset($_GET['id_paquete'])){
        $row=$controlador->consultar($_GET['id_paquete']);
    }else{
        header('Location: index2.php');
    }
    if(isset($_POST['registrar'])){
        $r= $controlador->editar($_GET['id_paquete'], $_POST['tipo_paquete'],
        $_POST['caracteristicas'], $_POST['costo']);
        if($r){
            echo "
    <script language='JavaScript'>
    alert('Registro modificado');
    window.location.href='?cargar=inicioPaquete';
    </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar datos de Paquetes</title>
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
        <h1 class="text-center"><b>Editar datos de Paquetes</b></h1>
        <div class="container1 container-fluid">
            <form method="post" action="">
                <div class="form-group mb-3">
                    <label for="tipo_paquete">Tipo:</label>
                    <input type="text" class="form-control" id="tipo_paquete" name="tipo_paquete" value="<?php echo $row['tipo_paquete']; ?>" 
                    pattern="[a-zA-ZÀ-ÿ\u00f1\u00d1\s]+" 
                    oninvalid="this.setCustomValidity('Solo se aceptan letras y espacios.')" 
                    oninput="this.setCustomValidity('')" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="caracteristicas">Características:</label>
                    <input type="text" class="form-control" id="caracteristicas" name="caracteristicas" value="<?php echo $row['caracteristicas']; ?>" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="costo">Costo:</label>
                    <input type="text" class="form-control" id="costo" name="costo" value="<?php echo $row['costo']; ?>" pattern="[0-9]{8}" 
                    oninvalid="this.setCustomValidity('Solo se aceptan números.')" 
                    oninput="this.setCustomValidity('')"autofocus required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="registrar">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>