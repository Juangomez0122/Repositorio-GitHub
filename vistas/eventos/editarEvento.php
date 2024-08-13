<?php
    $controlador= new controladorEvento();
    if(isset($_GET['id_evento'])){
        $row=$controlador->consultar($_GET['id_evento']);
    }else{
        header('Location:index2.php');
    }
    if(isset($_POST['registrar'])){
        $r= $controlador->editar($_GET['id_evento'], $_POST['nombre'], $_POST['descripcion'], $_POST['fecha'],
        $_POST['lugar'], $_POST['direccion'], $_POST['tipo_evento']);
        if($r){
            echo "
    <script language='JavaScript'>
    alert('Registro modificado');
    window.location.href='?cargar=inicioEvento';
    </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar datos de Eventos</title>
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
        <h1 class="text-center"><b>Editar datos de Eventos</b></h1>
        <div class="container1 container-fluid">
            <form method="post" action="">
                <div class="form-group mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="descripcion">Descripción:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $row['descripcion']; ?>" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="fecha">Fecha:</label>
                    <input type="date" require min=<?php $hoy=date("Y-m-d"); echo $hoy;?> class="form-control" id="fecha" name="fecha" 
                    value="<?php echo $row['fecha']; ?>" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="lugar">Lugar:</label>
                    <input type="text" class="form-control" id="lugar" name="lugar" value="<?php echo $row['lugar']; ?>" autofocus required>
                </div>
                <div class="form-group mb-3">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $row['direccion']; ?>" autofocus required>
                </div>
            
                <div class="form-group mb-3">
                    <label for="tipo_evento">Tipo de Evento:</label>
                    <select class="form-control" name="tipo_evento" id="tipo_evento" autofocus required>
                        <option value="<?php echo $row['tipo_evento']; ?>"><?php echo $row['tipo_evento']; ?></option>
                        <?php if ($row['tipo_evento'] == 'CONFERENCIA')
                                {
                                    echo"<option value='WORKSHOP'>WORKSHOP</option>";
                                }
                                else if ($row['tipo_evento'] == 'WORKSHOP')
                                {
                                    echo"<option value='CONFERENCIA'>CONFERENCIA</option>";
                                }

                                ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="registrar">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>