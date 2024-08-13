<?php
include_once('conexion.php');

class Hotel{

    //atributos

    private $id_hotel;
    private $nombre;
    private $no_estrellas;
    private $telefono;
    private $correo;
    private $sitio_web;
    private $direccion;
    private $ciudad;
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
        $sql = "SELECT * FROM hoteles";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function filtrar($valor){
        $sql = "SELECT * FROM hoteles where nombre like '$valor%'";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function crear(){

        $sql = "INSERT INTO hoteles (nombre,no_estrellas,telefono,correo,sitio_web,direccion,ciudad) 
        VALUES ('{$this->nombre}','{$this->no_estrellas}','{$this->telefono}','{$this->correo}',
        '{$this->sitio_web}','{$this->direccion}','{$this->ciudad}')";

        $this->con->consultaSimple($sql);
        return true;
    }

    public function eliminar(){
        $sql = "DELETE FROM hoteles WHERE id_hotel ='{$this->id_hotel}'";
        $resultado=$this->con->consultaSimple($sql);


    }

    public function consultar(){

        $sql = "SELECT * FROM hoteles WHERE id_hotel = '{$this->id_hotel}'";
        $resultado = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($resultado);

        //set

        $this->id_hotel=$row['id_hotel'];
        $this->nombre=$row['nombre'];
        $this->no_estrellas=$row['no_estrellas'];
        $this->telefono=$row['telefono'];
        $this->correo=$row['correo'];
        $this->sitio_web=$row['sitio_web'];
        $this->direccion=$row['direccion'];
        $this->ciudad=$row['ciudad'];
        return $row;
    }

    public function editar(){
        $sql =  "UPDATE hoteles SET nombre = '{$this->nombre}',no_estrellas = '{$this->no_estrellas}',telefono = '{$this->telefono}',correo = '{$this->correo}',
        sitio_web = '{$this->sitio_web}',direccion = '{$this->direccion}', ciudad = '{$this->ciudad}' WHERE id_hotel = '{$this->id_hotel}'";
        $this->con->consultaSimple($sql);
        return true;
    }


}
?>