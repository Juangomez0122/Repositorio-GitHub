<?php

  //$controlador = new controladorEstudiante();
$evento = new Evento();
if (isset($_POST)) {
    $buscar = @$_POST['buscar'];
    $resultado = $evento->filtrar($buscar);
} else {
    $resultado = $evento->listar();

}
?>
        <h2 class="text-center mb-4">Datos de los Eventos</h2>
<form method="POST" action="">
    <label for="">Nombre del evento</label>
    <input class="form-control" type="search" name="buscar" value="<?php echo isset($buscar) ? $buscar : '' ?>">
</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Estilo</title>
    <link rel="stylesheet" href="css/style_boton.css">
</head>
<body>
    <div class="container mt-4">
        <table class="table table-bordered table-striped">
        <thead>
                <tr>
                <th class="success">Id</th>
                <th class="success">Nombre</th>
                <th class="success">Descripción</th>
                <th class="success">Fecha</th>
                <th class="success">Lugar</th>
                <th class="success">Dirección</th>
                <th class="success">Tipo</th>
                <th class="success">Editar</th>
                <th class="success"><center>Eliminar</center></th>
                </tr>
            </thead>
            <button align="top" class="download-button" id="downloadBtn" onclick="window.open('reportes/reporte_Evento.php')"><span>Generar PDF</span></button>
            <tbody>
        <?php while($row = mysqli_fetch_assoc($resultado)):?>
            <tr>
                <td><?php echo $row['id_evento'];?></td>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['descripcion'];?></td>
                <td><?php echo $row['fecha'];?></td>
                <td><?php echo $row['lugar'];?></td>
                <td><?php echo $row['direccion'];?></td>
                <td><?php echo $row['tipo_evento'];?></td>
                <td><a class="btn btn-success btn-sm" href=?cargar=editarEvento&id_evento=<?php echo $row['id_evento'] ?>><center><i class="fas fa-edit"></i></center></a></td>
                <td><a class="btn btn-danger btn-sm" onClick='confirmar(<?php echo $row['id_evento']; ?> )'style="cursor: pointer"><center><i class="fas fa-trash-alt"></i></center></a></td>

            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script src="js/jquery.js"></script>
<script src="js/sweetalert.min.js"></script>

<script language = "javascript">
    function confirmar(id_evento) {
  var MyId = id_evento;
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
    window.location.href='?cargar=eliminarEvento&id_evento='+MyId;
  });
}
</script>