<?php
$controlador = new controladorHotel();
if(isset($_GET['id_hotel'])){
    $row=$controlador->consultar($_GET['id_hotel']);

}else{
    echo "
    <script language='JavaScript'>
    alert('Registro modificado');
    window.location.href='?cargar=inicioHotel';
    </script>";
}
$controlador->eliminar($_GET['id_hotel']);
echo "
<script language='JavaScript'>
alert('Registro eliminado');
window.location.href='?cargar=inicioHotel';
</script>";

?>