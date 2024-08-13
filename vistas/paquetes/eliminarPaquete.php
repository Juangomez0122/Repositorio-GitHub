<?php
$controlador = new controladorPaquete();
if(isset($_GET['id_paquete'])){
    $row=$controlador->consultar($_GET['id_paquete']);

}else{
    echo "
    <script language='JavaScript'>
    alert('Registro modificado');
    window.location.href='?cargar=inicioPaquete';
    </script>";
}
$controlador->eliminar($_GET['id_paquete']);
echo "
<script language='JavaScript'>
alert('Registro eliminado');
window.location.href='?cargar=inicioPaquete';
</script>";

?>