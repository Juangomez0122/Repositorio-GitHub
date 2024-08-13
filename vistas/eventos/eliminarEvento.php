<?php
$controlador = new controladorEvento();
if(isset($_GET['id_evento'])){
    $row=$controlador->consultar($_GET['id_evento']);

}else{
    echo "
    <script language='JavaScript'>
    alert('Registro modificado');
    window.location.href='?cargar=inicioEvento';
    </script>";
}
$controlador->eliminar($_GET['id_evento']);
echo "
<script language='JavaScript'>
alert('Registro eliminado');
window.location.href='?cargar=inicioEvento';
</script>";

?>