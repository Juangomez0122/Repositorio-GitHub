<?php
include_once('clases/Eventos.php');
include_once('clases/Empleados.php');
include_once('clases/Hotel.php');
include_once('clases/Paquetes.php');
//Clase para eventos
class controladorEvento {

    //atributos

    private $evento;

    //metodos

    public function __construct()
    {
        $this->evento = new Evento();
    }
    public function index()
    {
        $resultado = $this->evento->listar();
        return $resultado;
    }

    public function crear($nombre, $descripcion, $fecha, $lugar, $direccion, $tipo_evento)
    {
        $this->evento->set("nombre", $nombre);
        $this->evento->set("descripcion", $descripcion);
        $this->evento->set("fecha", $fecha);
        $this->evento->set("lugar", $lugar);
        $this->evento->set("direccion", $direccion);
        $this->evento->set("tipo_evento", $tipo_evento);


        $resultado = $this->evento->crear();
        return $resultado;
    }

    public function eliminar($id_evento)
    {
        $this->evento->set("id_evento", $id_evento);
        $this->evento->eliminar();
    }

    public function consultar($id_evento)
    {
        $this->evento->set("id_evento", $id_evento);
        $datos = $this->evento->consultar();
        return $datos;
    }

    public function editar($id_evento, $nombre, $descripcion, $fecha, $lugar, $direccion, $tipo_evento)
    {
        $this->evento->set("id_evento", $id_evento);
        $this->evento->set("nombre", $nombre);
        $this->evento->set("descripcion", $descripcion);
        $this->evento->set("fecha", $fecha);
        $this->evento->set("lugar", $lugar);
        $this->evento->set("direccion", $direccion);
        $this->evento->set("tipo_evento", $tipo_evento);
        $resultado = $this->evento->editar();
        return $resultado;
    }
}

//clase para empleado

class controladorEmpleado {

    //atributos

    private $empleado;

    //metodos

    public function __construct()
    {
        $this->empleado = new Empleado();
    }
    public function index()
    {
        $resultado = $this->empleado->listar();
        return $resultado;
    }

    public function crear($nombre, $correo, $telefono, $direccion, $sexo)
    {
        $this->empleado->set("nombre", $nombre);
        $this->empleado->set("correo", $correo);
        $this->empleado->set("telefono", $telefono);
        $this->empleado->set("direccion", $direccion);
        $this->empleado->set("sexo", $sexo);


        $resultado = $this->empleado->crear();
        return $resultado;
    }

    public function eliminar($id_empleado)
    {
        $this->empleado->set("id_empleado", $id_empleado);
        $this->empleado->eliminar();
    }

    public function consultar($id_empleado)
    {
        $this->empleado->set("id_empleado", $id_empleado);
        $datos = $this->empleado->consultar();
        return $datos;
    }

    public function editar($id_empleado, $nombre, $correo, $telefono, $direccion, $sexo)
    {
        $this->empleado->set("id_empleado", $id_empleado);
        $this->empleado->set("nombre", $nombre);
        $this->empleado->set("correo", $correo);
        $this->empleado->set("telefono", $telefono);
        $this->empleado->set("direccion", $direccion);
        $this->empleado->set("sexo", $sexo);
        $resultado = $this->empleado->editar();
        return $resultado;
    }
}

//clase para hoteles

class controladorHotel
{

    //atributos

    private $hotel;

    //metodos

    public function __construct()
    {
        $this->hotel = new Hotel();
    }
    public function index()
    {
        $resultado = $this->hotel->listar();
        return $resultado;
    }

    public function crear($nombre, $no_estrellas, $telefono, $correo, $sitio_web, $direccion, $ciudad)
    {
        $this->hotel->set("nombre", $nombre);
        $this->hotel->set("no_estrellas", $no_estrellas);
        $this->hotel->set("telefono", $telefono);
        $this->hotel->set("correo", $correo);
        $this->hotel->set("sitio_web", $sitio_web);
        $this->hotel->set("direccion", $direccion);
        $this->hotel->set("ciudad", $ciudad);

        $resultado = $this->hotel->crear();
        return $resultado;
    }

    public function eliminar($id_hotel)
    {
        $this->hotel->set("id_hotel", $id_hotel);
        $this->hotel->eliminar();
    }

    public function consultar($id_hotel)
    {
        $this->hotel->set("id_hotel", $id_hotel);
        $datos = $this->hotel->consultar();
        return $datos;
    }

    public function editar($id_hotel, $nombre, $no_estrellas, $telefono, $correo, $sitio_web, $direccion, $ciudad)
    {
        $this->hotel->set("id_hotel", $id_hotel);
        $this->hotel->set("nombre", $nombre);
        $this->hotel->set("no_estrellas", $no_estrellas);
        $this->hotel->set("telefono", $telefono);
        $this->hotel->set("correo", $correo);
        $this->hotel->set("sitio_web", $sitio_web);
        $this->hotel->set("direccion", $direccion);
        $this->hotel->set("ciudad", $ciudad);
        $resultado = $this->hotel->editar();
        return $resultado;
    }
}

//clase para paquetes

class controladorPaquete{

    //atributos

    private $paquete;

    //metodos

    public function __construct()
    {
        $this->paquete = new Paquetes();
    }
    public function index()
    {
        $resultado = $this->paquete->listar();
        return $resultado;
    }

    public function crear($tipo_paquete, $caracteristicas, $costo)
    {
        $this->paquete->set("tipo_paquete", $tipo_paquete);
        $this->paquete->set("caracteristicas", $caracteristicas);
        $this->paquete->set("costo", $costo);

        $resultado = $this->paquete->crear();
        return $resultado;
    }

    public function eliminar($id_paquete)
    {
        $this->paquete->set("id_paquete", $id_paquete);
        $this->paquete->eliminar();
    }

    public function consultar($id_paquete)
    {
        $this->paquete->set("id_paquete", $id_paquete);
        $datos = $this->paquete->consultar();
        return $datos;
    }

    public function editar($id_paquete, $tipo_paquete, $caracteristicas, $costo)
    {
        $this->paquete->set("id_paquete", $id_paquete);
        $this->paquete->set("tipo_paquete", $tipo_paquete);
        $this->paquete->set("caracteristicas", $caracteristicas);
        $this->paquete->set("costo", $costo);
        $resultado = $this->paquete->editar();
        return $resultado;
    }
}
