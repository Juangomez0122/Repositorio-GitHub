<?php

class enrutador
{
    public function cargarVista($vista)
    {
        if (@$_SESSION['validada'] == 1) {
            switch ($vista) {
                case "crearEvento":
                    include_once('vistas/eventos/' . $vista . '.php');
                    break;
                case "editarEvento":
                    include_once('vistas/eventos/' . $vista . '.php');
                    break;
                case "consultaParametro":
                    include_once('vistas/eventos/' . $vista . '.php');
                    break;
                case "eliminarEvento":
                    include_once('vistas/eventos/' . $vista . '.php');
                    break;
                case "inicioEvento":
                    include_once('vistas/eventos/' . $vista . '.php');
                    break;

                    // Empleado

                case "crearEmpleado":
                    include_once('vistas/empleados/' . $vista . '.php');
                    break;
                case "editarEmpleado":
                    include_once('vistas/empleados/' . $vista . '.php');
                    break;
                case "consultaParametroEmpleado":
                    include_once('vistas/empleados/' . $vista . '.php');
                    break;
                case "eliminarEmpleado":
                    include_once('vistas/empleados/' . $vista . '.php');
                    break;
                case "inicioEmpleado":
                    include_once('vistas/empleados/' . $vista . '.php');
                    break;

                    //Hotel

                case "crearHotel":
                    include_once('vistas/hoteles/' . $vista . '.php');
                    break;
                case "editarHotel":
                    include_once('vistas/hoteles/' . $vista . '.php');
                    break;
                case "consultaParametroHotel":
                    include_once('vistas/hoteles/' . $vista . '.php');
                    break;
                case "eliminarHotel":
                    include_once('vistas/hoteles/' . $vista . '.php');
                    break;
                case "inicioHotel":
                    include_once('vistas/hoteles/' . $vista . '.php');
                    break;

                    //paquetes

                case "crearPaquete":
                    include_once('vistas/paquetes/' . $vista . '.php');
                    break;
                case "editarPaquete":
                    include_once('vistas/paquetes/' . $vista . '.php');
                    break;
                case "consultaParametroPaquetes":
                    include_once('vistas/paquetes/' . $vista . '.php');
                    break;
                case "eliminarPaquete":
                    include_once('vistas/paquetes/' . $vista . '.php');
                    break;
                case "inicioPaquete":
                    include_once('vistas/paquetes/' . $vista . '.php');
                    break;

                case "cerrar":
                    session_destroy();
                    echo "
                            <script language='javascript'>
                            
                            window.location.href='index.html';
                            </script>";

                    break;
                default:

                    include_once('vistas/error.php');
            }
        } else {
            include_once('index.html');
        }
    }

    public function validarGet($variable)
    {
        if (isset($variable)) {
            return true;
        } else {
            if (@$_SESSION['validada'] == 1)
                include_once('vistas/empleados/inicioEmpleado.php');
            else
                echo "
            <script language='JavaScript'>
        
            window.location.href='index.html';
            </script>";
        }
    }
}
