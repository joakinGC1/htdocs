<?php
    include("../includes/validarLogin.php");
    include("../includes/validarAdmin.php");
    if(isset($_SESSION['id'])){
        if(strlen($_SESSION['id'])>=1){
            unset($_SESSION['id']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>USUARIOS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="generos.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Productos FEMPA</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"></h6>
                        <?php
                         if($_SESSION["is_admin"]){
                            echo '<span>Admin</span>';
                         }else{
                            echo '<span>Empleado</span>';
                         }
                        ?>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elementos</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="clientes.php" class="dropdown-item">Clientes</a>
                            <a href="compras.php" class="dropdown-item">Compras</a>
                            <a href="productos.php" class="dropdown-item">Productos</a>
                            <a href="generos.php" class="dropdown-item">Categorias</a>
                            <a href="diagramas.php" class="dropdown-item">Diagramas</a>
                            
                        
                        </div>
                    </div>
                    
                    </div>
               
            </nav>
    </div>

    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control bg-dark border-0" type="search" placeholder="Search">
            </form>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-envelope me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Message</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <?php
                    require("./db_conect.php");
                        $query = "select * from mensajes inner join empleado on id_empleado1 = id_emple order by id_men desc limit 5";
                        $result = $con->query($query);
                        
                        if($result->num_rows > 0){
                            while($fila = $result->fetch_assoc()){
                                
                                    include("../includes/cuerpo_mensaje.php");
                                
                            }
                        }else{
                            
                        }
                        ?>
                        
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificaciones</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <?php
                            require("./db_conect.php");
                            
                            $query = "select * from notificaciones order by id_not desc limit 5";
                            $result = $con->query($query);
                            
                            if($result->num_rows > 0){
                                while($fila = $result->fetch_assoc()){
                                    if($fila["is_active"] == 1){
                                        include("../includes/noticaciones.php");
                                    }
                                }
                            }else{
                                
                            }
                            ?>
                            
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?= $_SESSION["nombre"];?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="validar.php?cerrar=0" class="dropdown-item">Cerrar sessión</a>
                        </div>
                    </div>
                </div>
            </nav>
    <?php
        require("db_conect.php");
        $sql = "select * from empleado;";
        $result = $con->query($sql);

        if($result->num_rows > 0){
?>
<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Usuarios</h6>
            <table class="table table-dark table-responsive"">
                 <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre:</th>
                        <th scope="col">Apellido:</th>
                        <th scope="col">Rol:</th>
                        <th scope="col">Modificar:</th>
                        <th scope="col">Eliminar:</th>
                        </tr>
                    </thead>
                    <tbody>
        <?php

            while($fila = $result->fetch_assoc()){
                include("../includes/tabla_usuarios.php");
            }
        }else{
            
        }
        ?>

        </tbody>
         </table>
      </div>
 </div>
</div>
 <?php


        if(isset($_SESSION["error"])){
            if(strlen($_SESSION["error"]) > 1){
                echo $_SESSION["error"];
                unset($_SESSION["error"]);
            }
            
        }

        
        

        if(isset($_SESSION['error_modificacion'])){
            if(strlen($_SESSION['error_modificacion']) > 1){
                echo $_SESSION['error_modificacion'];
                unset($_SESSION['error_modificacion']);
            }
            
        }
        
        if(isset($_SESSION["error_alta"])){
            if(strlen($_SESSION["error_alta"]) > 1){
                echo $_SESSION["error_alta"];
                unset($_SESSION["error_alta"]);
            }
            
        }

        if(isset($_SESSION["error_eliminar"])){
            if(strlen($_SESSION["error_eliminar"]) > 1){
                echo $_SESSION["error_eliminar"];
                unset($_SESSION["error_eliminar"]);
            }            
        }
    ?>

    <form class="container-fluid" action="modificarUsuario.php?id=-1&nombre= &apellido= &rol=' '" method="post">
        <input class="btn btn-light m-2" type="submit" value="NUEVO USUARIO">
    </form>


    <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Joaquin Contreras</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="#">HTML Codex</a>
                            <br>Distributed By: <a href="#" target="_blank">Joaquin</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/chart/chart.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    <script src="../js/mensaje.js"></script
    <script src="../js/mensaje.js"></script>
</body>
</html>