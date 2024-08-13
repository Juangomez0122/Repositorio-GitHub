<?php
include_once('conexion.php');

class Empleado{

    //atributos 

    private $id_empleado;
    private $nombre;
    private $correo;
    Private $telefono;
    private $direccion;
    private $sexo;
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
        $sql = "SELECT * FROM empleados";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function filtrar($valor){
        $sql = "SELECT * FROM empleados where nombre like '$valor%'";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }
    
    public function crear(){

        $sql = "INSERT INTO empleados (nombre,correo,telefono,direccion,sexo) 
        VALUES ('{$this->nombre}','{$this->correo}','{$this->telefono}',
        '{$this->direccion}','{$this->sexo}')";

        $this->con->consultaSimple($sql);
        return true;
    }

    public function eliminar(){
        $sql = "DELETE FROM empleados WHERE id_empleado ='{$this->id_empleado}'";
        $resultado=$this->con->consultaSimple($sql);


    }

    public function consultar(){

        $sql = "SELECT * FROM empleados WHERE id_empleado = '{$this->id_empleado}'";
        $resultado = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($resultado);

        //set

        $this->id_empleado=$row['id_empleado'];
        $this->nombre=$row['nombre'];
        $this->correo=$row['correo'];
        $this->telefono=$row['telefono'];
        $this->direccion=$row['direccion'];
        $this->sexo=$row['sexo'];
        return $row;
    }

    public function editar(){
        $sql =  "UPDATE empleados SET nombre = '{$this->nombre}',correo = '{$this->correo}',telefono = '{$this->telefono}',
         direccion = '{$this->direccion}', sexo = '{$this->sexo}' WHERE id_empleado = '{$this->id_empleado}'";
        $this->con->consultaSimple($sql);
        return true;
    }


}
?>