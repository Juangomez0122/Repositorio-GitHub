<form method="POST" action="">
    <label>Nombre del evento</label><input type="search" name="buscar">
</form>
<table class="table table-striped">
    <thead>

    <th class='sucess'>Id</th>
    <th class='sucess'>Nombre</th>
    <th class='sucess'>Descripción</th>
    <th class='sucess'>Fecha</th>
    <th class='sucess'>Lugar</th>
    <th class='sucess'>Dirección</th>
    <th class='sucess'>Tipo de evento</th>
    <th class='sucess'>Editar</th>
    <th class='sucess'>Eliminar</th>


    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
        <tr>
                <th scope="row"><?php echo $resultado['id_evento'];?></th>
                <th scope="row"><?php echo $resultado['nombre'];?></th>
                <th scope="row"><?php echo $resultado['descripcion'];?></th>
                <th scope="row"><?php echo $resultado['fecha'];?></th>
                <th scope="row"><?php echo $resltado['lugar'];?></th>
                <th scope="row"><?php echo $resultado['direccion'];?></th>
            <th><a href=?cargar=editar$id=<?php echo $row['id_evento']; ?>>Editar</a></th>
            <th><a onClick='confirmar(<?php echo $row['id_evento']; ?> )'>Eliminar</a></th>
            
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script src="js/jquery.js"></script>

<script language = "javascript">
    function confirmar(id_evento){
    confirmar=confirm("Realmente deseas eliminar el registro?");
    if(confirmar)
    {

    window.location.href='?cargar=eliminar&id_evento='+id_evento;
    alert('Registro eliminado...');

    }
    else {
        document.location="index2.php";
    }
    }
</script>