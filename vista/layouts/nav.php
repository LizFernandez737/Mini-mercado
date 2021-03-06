<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../img/logo.png" type="image/png">

<!--select2-->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/css/all.min.css">
  <!-- Ionicons -->
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
     
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <a href="../controlador/Logout.php">Cerrar Sesion</a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../vista/adm_catalogo.php" class="brand-link">
      <span class="brand-text font-weight-light">Mini Mercado</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img id="avatar4"src="../img/mujer.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="editar_datos_personales.php" class="d-block">
              <?php
                echo $_SESSION['nombre_us'];
              ?>
          </a>
        </div>
      </div>
<!-- Sidebar Menu -->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu">
            <a href="#" class="nav-link">
            <i class="fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="../vista/usuarios.php" class="nav-link">
                <i class="fas fa-shield-alt"></i>
                  <p>Usuarios</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../vista/usuariosRoles.php" class="nav-link ">
                <i class="fas fa-users-cog"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                <i class="fas fa-shield-alt"></i>
                  <p>Permisos</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu">
            <a href="#" class="nav-link">
            <i class="fas fa-chart-line"></i>
              <p>
                Ventas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                <i class="fas fa-clipboard-check"></i>
                  <p>Reportes</p>
                </a>
              </li>
            </ul>
          </li>       
             
          
          <li class="nav-item menu">
            <a href="#" class="nav-link">
            <i class="fas fa-boxes"></i>
              <p>
                Almac??n
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../vista/categoria_productos.php" class="nav-link ">
                <i class="fas fa-shopping-basket"></i>
                  <p>Productos</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link ">
                <i class="fas fa-truck-loading"></i>
                  <p>Proveedores</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link ">
                <i class="fas fa-clipboard-list"></i>
                  <p>Inventario</p>
                </a>
              </li>
            </ul>
          </li> 

          <li class="nav-item menu">
            <a href="#" class="nav-link">
            <i class="fas fa-dolly"></i>
              <p>
                Compras
              </p>
            </a>
            </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>