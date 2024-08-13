<?php
$controlador = new controladorEmpleado();
if(isset($_POST['registrar'])){
    $r=$controlador->crear($_POST['nombre'],$_POST['correo'],
    $_POST['telefono'],$_POST['direccion'],$_POST['sexo']);
if($r){
echo "
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
        window.location.href='?cargar=crearEmpleado';
    }else{
        window.location.href='?cargar=inicioEmpleado';
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
    <title>Registro de Empleados</title>
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
        <h1 class="text-center"><b>Registro de Empleados</b></h1>
        <div class="container1 container-fluid">
            <form method="post" action="">
                <div class="form-group mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre" 
                    pattern="[a-zA-ZÀ-ÿ\u00f1\u00d1\s]+" 
                    oninvalid="this.setCustomValidity('Solo se aceptan letras y espacios.')" 
                    oninput="this.setCustomValidity('')" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa el correo" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingresa el teléfono"
                    pattern="[0-9]{10}"
                    oninvalid="this.setCustomValidity('Ingresa un número de teléfono válido')" 
                    oninput="this.setCustomValidity('')" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa la dirección" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="sexo">Sexo:</label>
                    <select class="form-control" name="sexo" id="sexo" autofocus required>
                        <option value="MASCULINO">MASCULINO</option>
                        <option value="FEMENINO">FEMENINO</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="registrar">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>