<?php
require_once 'conexion.php';

class Login{
    public function __construct($user, $pass) {
        $this->user = $user;
        $this->pass = $pass;
    }

    public function validar(){
        $con = new Conexion();
        $sql= "SELECT nombre FROM usuarios WHERE pass= '$this->pass' AND user='$this->user'";
        $res = $con->consultaRetorno($sql);

            while ($fila = mysqli_fetch_assoc($res)){
                @session_start();
                $_SESSION['nombre'] = $fila['nombre'];
                $_SESSION['user'] = $this-> user;
                $_SESSION['validada'] = 1;
            }

    }
}
?>