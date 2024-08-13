<?php
$controlador = new controladorEvento();
if(isset($_POST['registrar'])){
    $r=$controlador->crear($_POST['nombre'], $_POST['descripcion'], $_POST['fecha'],
    $_POST['lugar'], $_POST['direccion'], $_POST['tipo_evento']);
if($r){
echo "
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
        window.location.href='?cargar=crearEvento';
    }else{
        window.location.href='?cargar=inicioEvento';
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
    <title>Registro de Eventos</title>
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
        <h1 class="text-center"><b>Registro de Eventos</b></h1>
        <div class="container1 container-fluid">
            <form method="post" action="">
                <div class="form-group mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Evento" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="descripcion">Descripción:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="fecha">Fecha:</label>
                    <input type="date" require min=<?php $hoy=date("Y-m-d"); echo $hoy;?> class="form-control" id="fecha" name="fecha" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="lugar">Lugar:</label>
                    <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Lugar" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" autofocus required>
                </div>
            
                <div class="form-group mb-3">
                    <label for="tipo_evento">Tipo de Evento:</label>
                    <select class="form-control" name="tipo_evento" id="tipo_evento" autofocus required>
                        <option value="CONFERENCIA">CONFERENCIA</option>
                        <option value="WORKSHOP">WORKSHOP</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="registrar">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>