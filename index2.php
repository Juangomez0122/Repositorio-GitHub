<?php
    session_start();
    include_once('modulos/enrutador.php');
    include_once('modulos/controlador.php');
    if($_SESSION['validada'] == 1){

    } else {
        header('location: inicio_sesion.html');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #enrutador {
            background:linear-gradient(220deg,black,blue);
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Developer_web</title>
    <link href="img/index2.jpg" rel="icon">
    <!-- Custom fonts for this template-->
    <link href="vendores/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"> <!-- Añadimos el nuevo archivo CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" 
                aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                    <img class="img-profile rounded-circle" src="img/logo_developer.png" 
                    class="sidebar-brand-text mx-3"> Developer web
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePaquetes"
                    aria-expanded="true" aria-controls="collapsePaquetes">
                    <i class='bx bxs-package'></i>
                    <span>Paquetes</span>
                </a>
                <div id="collapsePaquetes" class="collapse" aria-labelledby="headingPaquetes" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?cargar=crearPaquete">Registrar</a>
                        <a class="collapse-item" href="?cargar=inicioPaquete">Consultar</a>
                     </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmpleado"
                    aria-expanded="true" aria-controls="collapseEmpleado">
                    <i class='bx bxs-contact'></i>
                    <span>Empleados</span>
                </a>
                <div id="collapseEmpleado" class="collapse" aria-labelledby="headingEmpleado"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?cargar=crearEmpleado">Registrar</a>
                        <a class="collapse-item" href="?cargar=inicioEmpleado">Consultar</a>
                     </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvento"
                    aria-expanded="true" aria-controls="collapseEvento">
                    <i class='bx bx-code-alt'></i>
                    <span>Eventos</span>
                </a>
                <div id="collapseEvento" class="collapse" aria-labelledby="headingEvento"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?cargar=crearEvento">Registrar</a>
                        <a class="collapse-item" href="?cargar=inicioEvento">Consultar</a>
                     </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHotel"
                    aria-expanded="true" aria-controls="collapseHotel">
                    <i class='bx bx-buildings'></i>
                    <span>Hoteles</span>
                </a>
                <div id="collapseHotel" class="collapse" aria-labelledby="headingHotel"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?cargar=crearHotel">Registrar</a>
                        <a class="collapse-item" href="?cargar=inicioHotel">Consultar</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="enrutador">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="text-transform: uppercase; color:white;"><?php if (@$_SESSION['validada']==1) {
                                    echo "<span><label align=right>".$_SESSION['nombre']."</label></span>";}?></span> 
                                <img class="img-profile rounded-circle" src="img/logo_equipo.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir de la cuenta
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="container-fluid">
                        <!-- Content Row -->
                        <div class="col-6 col-md-10 container">
                            <section>
                                <?php
                                $enrutador = new enrutador();
                                if($enrutador->validarGET(@$_GET['cargar'])){
                                    $enrutador->cargarVista($_GET['cargar']);
                                }
                                ?>
                            </section>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer text-white" id="enrutador">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Code Engineers &copy; Developerweb_2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Quieres salir de tu cuenta?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Estas segur@ que quieres cerrar sesion?</div>
                <div class="modal-footer">
                    <span class="mr-1 d-none d-lg-inline small">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="?cargar=cerrar">Salir</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendores/jquery/jquery.min.js"></script>
    <script src="vendores/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendores/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendores/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>