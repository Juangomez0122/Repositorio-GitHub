<?php
include_once('conexion.php');

class Evento{

    //atributos

    private $id_evento;
    private $nombre;
    private $descripcion;
    private $fecha;
    private $lugar;
    private $direccion;
    private $tipo_evento;
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
        $sql = "SELECT * FROM eventos";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function filtrar($valor){
        $sql = "SELECT * FROM eventos where nombre like '$valor%'";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function crear(){

        $sql = "INSERT INTO eventos (nombre,descripcion,fecha,lugar,direccion,tipo_evento) 
        VALUES ('{$this->nombre}','{$this->descripcion}','{$this->fecha}','{$this->lugar}',
        '{$this->direccion}','{$this->tipo_evento}')";
        $this->con->consultaSimple($sql);
        return true;
    }

    public function eliminar(){
        $sql = "DELETE FROM eventos WHERE id_evento ='{$this->id_evento}'";
        $resultado=$this->con->consultaSimple($sql);


    }

    public function consultar(){

        $sql = "SELECT * FROM eventos WHERE id_evento = '{$this->id_evento}'";
        $resultado = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($resultado);

        //set

        $this->id_evento=$row['id_evento'];
        $this->nombre=$row['nombre'];
        $this->descripcion=$row['descripcion'];
        $this->fecha=$row['fecha'];
        $this->lugar=$row['lugar'];
        $this->direccion=$row['direccion'];
        $this->tipo_evento=$row['tipo_evento'];
        return $row;
    }

    public function editar(){
        $sql =  "UPDATE eventos SET nombre = '{$this->nombre}', descripcion = '{$this->descripcion}', fecha = '{$this->fecha}', lugar = '{$this->lugar}',
        direccion = '{$this->direccion}', tipo_evento = '{$this->tipo_evento}' WHERE id_evento = '{$this->id_evento}'";
        $this->con->consultaSimple($sql);
        return true;
    }


}
?>