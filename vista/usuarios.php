<?php
session_start();
if($_SESSION['us_tipo']==1){
    include_once 'layouts/header.php';
?>

  <title>Roles</title>
<?php
    include_once 'layouts/nav.php';
?>

<!--Modal-->

<div class="modal fade" id="crearusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Crear Usuario</h3>
            <button class="close" data-dismiss="modal" aria-label="modal">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="card-body">
        <form id="crear">
        
            <div class="form-group">
            <label for="nombre">Nombres</label>
            <input id="nombre" type="text" class="form-control" placeholder="ingresar nombres" required>
            </div>

            <div class="form-group">
            <label for="nombre">Apellidos</label>
            <input id="nombre" type="text" class="form-control" placeholder="ingresar apellidos" required>
            </div>

            <div class="form-group">
            <label for="edad">Fecha de nacimiento</label>
            <input id="edad" type="date" class="form-control" placeholder="ingresar fecha de nacimiento" required>
            </div>

            <div class="form-group">
            <label for="dni">Usuario</label>
            <input id="dni" type="text" class="form-control" placeholder="ingresar usuario" required>
            </div>

            <div class="form-group">
            <label for="pass">Password</label>
            <input id="pass" type="password" class="form-control" placeholder="ingresar contraseña" required>
            </div>
        </div>
        <div class="card-footer">

            <button type="submit" class="btn bg-gradient-primary float-right">Guardar</button>    
            <button type="button" data-dismiss="modal" class="btn btn-outline-secondary float-right mr-3">Cerrar</button>
            </form>
        </div>
    </div>
 
    </div>
  </div>
</div>
<!--end modal-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestion de usuarios <button type="button" data-toggle="modal" data-target="#crearusuario" class="btn bg-gradient-primary ml-2">Crear usuario</button></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
</section>
    <!-- /.content -->
    <section>
    
    <div class="container-fluid">
        <div class="card card-success">
            <div class="card-header">
            <h3 class="card-tittle">Buscar usuario</h3>
            <div class="input-group">
                <input type="text" id="buscar" placeholder="ingrese nombre de ususario" class="form-control float-left">
                <div class="input-group-append">
                <button class="btn btn-default">
                <i class="fas fa-search"></i>
                </button>
                </div>
            </div>
            </div>
            <div id="usuarios" class="card-body">

            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>

    </section>
  </div>
  <!-- /.content-wrapper -->
  
<?php
include_once 'layouts/footer.php';
}
else{
    header('Location: ../index.php');
}
?>
<script src="../js/Gestion_Usuario.js"></script>