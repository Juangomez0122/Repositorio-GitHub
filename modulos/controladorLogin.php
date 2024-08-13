<?php
require_once '../clases/login.php';
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$login = new Login($usuario,$pass);

$login->validar();
if($_SESSION['validada']==1)
  header("location: ../index2.php");
else
header("location: ../inicio_sesion.html");
?>