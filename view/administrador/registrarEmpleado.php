<?php
  require_once("../../model/conexion.php");
  require_once("../../model/validarSesion.php");
  require_once("../../controller/seguridadE.php");
?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro Empleado | RainTED</title>

  <!-- favicon -->
  <link href="../client-side/images/favicon.png" rel="shortcut icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dashboard/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="homeAdmin.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dashboard/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dashboard/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dashboard/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="homeAdmin.php" class="brand-link">
      <img src="../client-side/images/favicon.png" alt="Rainted Logo" class="brand-image">
      <span class="brand-text font-weight-light">RainTED</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dashboard/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users-cog"></i>
              <p>
                Empleados
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registrarEmpleado.php" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Registar empleado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verEmpleados.php" class="nav-link">
                <i class="fas fa-eye"></i>
                  <p>Ver Empleados</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- clientes -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users-cog"></i>
              <p>
                Clientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registrarCliente.php" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Registar cliente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="VerCliente.php" class="nav-link">
                <i class="fas fa-eye"></i>
                  <p>Ver clientes</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Proveedores -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users-cog"></i>
              <p>
                Proveedores
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registrarProveedor.php" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Registar Proveedor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verProveedores.php" class="nav-link">
                <i class="fas fa-eye"></i>
                  <p>Ver proveedores</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- ventas -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-hand-holding-usd"></i>
              <p>
                ventas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registrarVenta.php" class="nav-link">
                <i class="fas fa-eye"></i>
                  <p>Generar Venta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verVentas.php" class="nav-link">
                <i class="fas fa-eye"></i>
                  <p>Ver las ventas</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- productos -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users-cog"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registrarProductoA.php" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Registrar productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verProductosA.php" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Ver productos</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Inventario -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users-cog"></i>
              <p>
                Inventario
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registrarInventarioProductos.php" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Registrar inventario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verInventarioProductos.php" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Ver inventario</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- reportes -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-newspaper"></i>
              <p>
                reportes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>reportes de ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-eye"></i>
                  <p>reportes de proveedores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-eye"></i>
                  <p>reportes de productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-eye"></i>
                  <p>reportes de clientes</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registrar empleado al sistema</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            
            <div class="card card-primary">
              <div class="card-header">
                <h5 class="m-0">Formulario de registro</h5>
              </div>
              <form action="../../controller/insertEmpleadosA.php" method="POST">
                <div class="card-body">
                  <div class="row">
                    <!-- a la opcion de "selciones una opcion" se le pone un valor vacio para que haga 
                    la comparacion en insertarUserA y no de error -->
                    <div class="form-group col-md-6">
                      <label for="tipoDocImput">Tipo de documento</label>
                      <select class="form-control" name="tipoDoc" id="tipoDocImput" require>
                        <option value="" selected>Seleccione una opción</option>
                        <option value="1">CC</option>
                        <option value="2">CE</option>
                        <option value="3">Pasaporte</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="documentoimput">No. Documento</label>
                      <input type="number" name="numDoc" class="form-control" id="documentoimput" placeholder="No. de docuemento">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="nombresImput">Nombres</label>
                      <input type="text" name="nombres" class="form-control" id="nombresImput" placeholder="Nombres completos">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="apellidosImput">Apellidos</label>
                      <input type="text" name="apellidos" class="form-control" id="apellidosImput" placeholder="Apellidos completos">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="celularImput">Celular</label>
                      <input type="number" name="celular" class="form-control" id="celularImput" placeholder="No. de celular">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="telefonoImput">Telefono</label> 
                      <input type="number" name="telefono" class="form-control" id="telefonoImput" placeholder="No. teléfono fijo (opcional)">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="direccionImput">Dirección</label>
                      <input type="text" name="direccion" class="form-control" id="direccionImput" placeholder="Dirección de residencia">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="emailImput">Email</label>
                      <input type="email" class="form-control" name="email" id="emailImput" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="epsImput">Eps</label>
                      <select class="form-control" name="eps" id="epsImput" require>
                        <option value="" selected>seleccione una opción</option>
                        <option value="1">Alian salud</option>
                        <option value="2">Cafam</option>
                        <option value="3">Compensar</option>
                        <option value="4">Confandi</option>
                        <option value="5">Famisanar</option>
                        <option value="6">Nueva Eps</option>
                        <option value="7">Salud total</option>
                        <option value="8">Sanitas</option>
                        <option value="9">Servicio ocidental</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="cajaCompensacionImput">Caja Compensación</label>
                      <select class="form-control" name="cajaCompensacion" id="cajaCompensacionImput" require>
                        <option value="" selected>seleccione una opción</option>
                        <option value="1">Cafam</option>
                        <option value="2">Cajasan</option>
                        <option value="3">Colsubsidio</option>
                        <option value="4">Concaja</option>
                        <option value="5">Confacundi</option>
                        <option value="6">Compensar</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="arlImput">ARL</label>
                      <select class="form-control" name="arl" id="arlImput" require>
                        <option value="" selected>seleccione una opción</option>
                        <option value="1">Aurora</option>
                        <option value="2">Axa colpatria</option>
                        <option value="3">Colmena</option>
                        <option value="4">La equidad</option>
                        <option value="5">Liberty seguros</option>
                        <option value="6">Mapfre</option>
                        <option value="7">Positiva</option>
                        <option value="8">Seguros alfa</option>
                        <option value="9">Seguros bolivar</option>
                        <option value="10">Sura</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="fondoImput">Fondo de pensiones</label>
                      <select class="form-control" name="fondoPension" id="fondoImput" require>
                        <option value="" selected>seleccione una opción</option>
                        <option value="1">Colfondos</option>
                        <option value="2">Colpensiones</option>
                        <option value="3">Old mutuak</option>
                        <option value="4">Porvenir</option>
                        <option value="5">Protección</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="generoImput">Genero</label>
                      <select class="form-control" name="genero" id="generoImput" require>
                        <option value="" selected>seleccione una opción</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                        <option value="3">Otro</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="rolImput">Rol</label>
                      <select class="form-control" name="rol" id="rolImput" require>
                        <option value="" selected>seleccione una opción</option>
                        <option value="1">Administrador</option>
                        <option value="2">Vendedor</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="cargoImput">estado</label>
                      <select class="form-control" name="estado" id="cargoImput" require>
                        <option value="" selected>seleccione una opción</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                        <option value="3">Pendiente</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registar</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dashboard/dist/js/adminlte.min.js"></script>
</body>
</html>
