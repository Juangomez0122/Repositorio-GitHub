<form method="POST" action="">
    <label>Nombre del hotel</label><input type="search" name="buscar">
</form>
<table class="table table-striped">
    <thead>

    <th class='sucess'>Id</th>
    <th class='sucess'>Nombre</th>
    <th class='sucess'>Número de estrellas</th>
    <th class='sucess'>Teléfono</th>
    <th class='sucess'>Correo</th>
    <th class='sucess'>Sitio web</th>
    <th class='sucess'>Direccién</th>
    <th class='sucess'>Ciudad</th>
    <th class='sucess'>Editar</th>
    <th class='sucess'>Eliminar</th>


    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
        <tr>
                <td><?php echo $row['id_hotel'];?></td>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['no_estrellas'];?></td>
                <td><?php echo $row['telefonno'];?></td>
                <td><?php echo $row['correo'];?></td>
                <td><?php echo $row['sitio_web'];?></td>
                <td><?php echo $row['direccion'];?></td>
                <td><?php echo $row['ciudad'];?></td>
            <td><a href=?cargar=editar$id=<?php echo $row['id_hotel']; ?>>Editar</a></td>
            <td><a onClick='confirmar(<?php echo $row['id_hotel']; ?> )'>Eliminar</a></td>
            
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script src="js/jquery.js"></script>

<script language = "javascript">
    function confirmar(id_hotel){
    confirmar=confirm("Realmente deseas eliminar el registro?");
    if(confirmar)
    {

    window.location.href='?cargar=eliminar&id_hotel='+id_hotel;
    alert('Registro eliminado...');

    }
    else {
        document.location="index2.php";
    }
    }
</script>