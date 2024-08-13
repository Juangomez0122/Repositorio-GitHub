<?php
$hotel = new Hotel();
if (isset($_POST)) {
    $buscar = @$_POST['buscar'];
    $resultado = $hotel->filtrar($buscar);
} else {
    $resultado = $hotel->listar();
}
?>
        <h2 class="text-center mb-4">Datos de los Hoteles</h2>
<form method="POST" action="">
    <label for="">Nombre del hotel</label>
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
<button align="top" class="download-button" id="downloadBtn" onclick="window.open('reportes/reporte_Hotel.php')"><span>Generar PDF</span></button>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Estrellas</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Correo</th>
                <th scope="col">Sitio web</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col"><center>Editar</center></th>
                <th scope="col"><center>Eliminar</center></th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($resultado)): ?>
                <tr>
                    <td><?php echo $row['id_hotel']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['no_estrellas']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['sitio_web']; ?></td>
                    <td><?php echo $row['direccion']; ?></td>
                    <td><?php echo $row['ciudad']; ?></td>
                    <td><a class="btn btn-success btn-sm" href="?cargar=editarHotel&id_hotel=<?php echo $row['id_hotel']; ?>"><center><i class="fas fa-edit"></i></center></a></td>
                    <td><a class="btn btn-danger btn-sm" onClick="confirmar(<?php echo $row['id_hotel']; ?>)" style="cursor: pointer;"><center><i class="fas fa-trash-alt"></i></center></a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/sweetalert.min.js"></script>

<script language = "javascript">
    function confirmar(id_hotel) {
  var MyId = id_hotel;
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
    window.location.href='?cargar=eliminarHotel&id_hotel='+MyId;
  });
}
</script>