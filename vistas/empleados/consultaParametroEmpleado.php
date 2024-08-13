<form method="POST" action="">
    <label>Empleados</label><input type="search" name="buscar">
</form>
<table class="table table-striped">
    <thead>

    <th class="sucess">Id</th>
    <th class="sucess">Nombre</th>
    <th class="sucess">Correo</th>
    <th class="sucess">Teléfono</th>
    <th class="sucess">Dirección</th>
    <th class="sucess">Sexo</th>
    <th class="sucess">Editar</th>
    <th class="sucess">Eliminar</th>


    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td><?php echo $row['id_empleado']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['sexo']; ?></td>
            <td><a href=?cargar=editar$id=<?php echo $row['id_empleado']; ?>>Editar</a></td>
            <td><a onClick='confirmar(<?php echo $row['id_empleado']; ?> )'>Eliminar</a></td>
            
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script src="js/jquery.js"></script>

<script language = "javascript">
    function confirmar(id_empleado){
    confirmar=confirm("Realmente deseas eliminar el registro?");
    if(confirmar)
    {

    window.location.href='?cargar=eliminar&id_empleado='+id_empleado;
    alert('Registro eliminado...');

    }
    else {
        document.location="index2.php";
    }
    }
</script>