<?php

//$controlador = new controladorpaquete();
$paquete = new Paquetes();
if (isset($_POST)) {
    $buscar = @$_POST['buscar'];
    $resultado = $paquete->filtrar($buscar);
} else {
    $resultado = $paquete->listar();

}
?>
        <h2 class="text-center mb-4">Datos de los Paquetes</h2>
<form method="POST" action="">
    <label for="">Nombre del paquete</label>
    <input class="form-control" type="search" name="buscar" value="<?php echo isset($buscar) ? $buscar : '' ?>">
</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_boton.css">
</head>
<body>
    <div class="container mt-4">
        <table class="table table-bordered table-striped">
        <thead>
    <th class="success">Id</th>
    <th class="success">Tipo</th>
    <th class="success">Características</th>
    <th class="success">Costo</th>
    <th class="success"><center>Editar</center></th>
    <th class="success"><center>Eliminar</center></th>
    </thead>
    <button align="top" class="download-button" id="downloadBtn" onclick="window.open('reportes/reporte_Paquete.php')"><span>Generar PDF</span></button>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($resultado)):?>
            <tr>
                <td><?php echo $row['id_paquete'];?></td>
                <td><?php echo $row['tipo_paquete'];?></td>
                <td><?php echo $row['caracteristicas'];?></td>
                <td><?php echo $row['costo'];?></td>
                <td><a class="btn btn-success btn-sm" href=?cargar=editarPaquete&id_paquete=<?php echo $row['id_paquete'] ?>><center><i class="fas fa-edit"></i></center></a></td>
                <td><a class="btn btn-danger btn-sm" onClick='confirmar(<?php echo $row['id_paquete']; ?> )'style="cursor: pointer;"><center><i class="fas fa-trash-alt"></i></center></a></td>

            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script src="js/jquery.js"></script>
<script src="js/sweetalert.min.js"></script>

<script language = "javascript">
    function confirmar(id_paquete) {
  var MyId = id_paquete;
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
    window.location.href='?cargar=eliminarPaquete&id_paquete='+MyId;
  });
}
</script>