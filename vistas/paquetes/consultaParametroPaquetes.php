<form method="POST" action="">
    <label>Nombre del Paquete</label><input type="search" name="buscar">
</form>
<table class="table table-striped">
    <thead>

    <th class="sucess">Id</th>
    <th class="sucess">Tipo</th>
    <th class="sucess">Características</th>
    <th class="sucess">Costo</th>
    <th class="sucess">Editar</th>
    <th class="sucess">Eliminar</th>


    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td><?php echo $row['id_paquete']; ?></td>
            <td><?php echo $row['tipo_paquete']; ?></td>
            <td><?php echo $row['caracteristicas']; ?></td>
            <td><?php echo $row['costo']; ?></td>
            <td><a href=?cargar=editar$id=<?php echo $row['id_paquete']; ?>>Editar</a></td>
            <td><a onClick='confirmar(<?php echo $row['id_paquete']; ?> )'>Eliminar</a></td>
            
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script src="js/jquery.js"></script>

<script language = "javascript">
    function confirmar(id_paquete){
    confirmar=confirm("Realmente deseas eliminar el registro?");
    if(confirmar)
    {

    window.location.href='?cargar=eliminar&id_paquete='+id_paquete;
    alert('Registro eliminado...');

    }
    else {
        document.location="index2.php";
    }
    }
</script>