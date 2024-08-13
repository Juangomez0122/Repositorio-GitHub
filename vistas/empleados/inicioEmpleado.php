<?php

//$controlador = new controladorEmpleado();
$empleado = new Empleado();
if (isset($_POST)) {
    $buscar = @$_POST['buscar'];
    $resultado = $empleado->filtrar($buscar);
} else {
    $resultado = $empleado->listar();

}
?>
        <h2 class="text-center mb-4">Datos de los Empleados</h2>
<form method="POST" action="">
    <label for="">Nombre del empleado</label>
    <input class="form-control" type="search" name="buscar" value="<?php echo isset($buscar) ? $buscar : '' ?>">
</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Estilo</title>
    <link rel="stylesheet" href="bootstrap-5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_boton.css">
</head>
<body>
    <div class="container mt-4">
        <table class="table table-bordered table-striped">
        <thead>
    <th class="success">Id</th>
    <th class="success">Nombre</th>
    <th class="success">Correo</th>
    <th class="success">Teléfono</th>
    <th class="success">Dirección</th>
    <th class="success">Sexo</th>
    <th class="success">Editar</th>
    <th class="success"><center>Eliminar</center></th>
    </thead>
    <button align="top" class="download-button" id="downloadBtn" onclick="window.open('reportes/reporte_Empleado.php')"><span>Generar PDF</span></button>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($resultado)):?>
            <tr>
                <td><?php echo $row['id_empleado'];?></td>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['correo'];?></td>
                <td><?php echo $row['telefono'];?></td>
                <td><?php echo $row['direccion'];?></td>
                <td><?php echo $row['sexo'];?></td>
                <td><a class="btn btn-success btn-sm" href=?cargar=editarEmpleado&id_empleado=<?php echo $row['id_empleado'] ?>><center><i class="fas fa-edit"></i></center></a></td>
                <td><a class="btn btn-danger btn-sm" onClick='confirmar(<?php echo $row['id_empleado']; ?> )'style="cursor: pointer;"><center><i class="fas fa-trash-alt"></i></center></a></td>

            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script src="js/jquery.js"></script>
<script src="js/sweetalert.min.js"></script>

<script language = "javascript">
    function confirmar(id_empleado) {
  var MyId = id_empleado;
  swal({
    title: "¿Estas seguro de eliminar el registro?",
    text: "Ya no podrás recuperarlo",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#42599b",
    confirmButtonText: "Sí, borrar",
    closeOnConfirm: false
  },
  function(){
    window.location.href='?cargar=eliminarEmpleado&id_empleado='+MyId;
  });
}

</script>