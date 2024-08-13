<?php
include_once('conexion.php');

class Paquetes {

    //atributos

    private $id_paquete;
    private $tipo_paquete;
    private $caracteristicas;
    private $costo;
    private $con;

    //metodos

    public function __construct(){

        $this->con = new conexion();
    }

    public function set($atributo, $contenido){
        $this->$atributo = $contenido;
    }

    public function get($atributo){
        return $this->$atributo;
    }

    public function listar(){
        $sql = "SELECT * FROM paquetes";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function filtrar($valor){
        $sql = "SELECT * FROM paquetes WHERE tipo_paquete LIKE '$valor%'";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function crear(){

        $sql = "INSERT INTO paquetes (tipo_paquete,caracteristicas,costo) 
        VALUES ('{$this->tipo_paquete}','{$this->caracteristicas}','{$this->costo}')";

        $this->con->consultaSimple($sql);
        return true;
    }

    public function eliminar(){
        $sql = "DELETE FROM paquetes WHERE id_paquete ='{$this->id_paquete}'";
        $resultado=$this->con->consultaSimple($sql);


    }

    public function consultar(){

        $sql = "SELECT * FROM paquetes WHERE id_paquete = '{$this->id_paquete}'";
        $resultado = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($resultado);

        //set

        $this->id_paquete=$row['id_paquete'];
        $this->tipo_paquete=$row['tipo_paquete'];
        $this->caracteristicas=$row['caracteristicas'];
        $this->costo=$row['costo'];
        return $row;
    }

    public function editar(){
        $sql =  "UPDATE paquetes SET tipo_paquete = '{$this->tipo_paquete}', caracteristicas = '{$this->caracteristicas}',
        costo = '{$this->costo}' WHERE id_paquete = '{$this->id_paquete}'";
        $this->con->consultaSimple($sql);
        return true;
    }


}
?>