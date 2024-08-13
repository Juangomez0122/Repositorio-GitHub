<?php
$controlador = new controladorEmpleado();
if(isset($_GET['id_empleado'])){
    $row=$controlador->consultar($_GET['id_empleado']);

}else{
    echo "
    <script language='JavaScript'>
    alert('Registro modificado');
    window.location.href='?cargar=inicioEmpleado';
    </script>";
}
$controlador->eliminar($_GET['id_empleado']);
echo "
<script language='JavaScript'>
alert('Registro eliminado');
window.location.href='?cargar=inicioEmpleado';
</script>";

?>