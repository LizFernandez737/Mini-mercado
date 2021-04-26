<?php
    include_once 'layouts/header.php';
?>

  <title>Editar datos</title>
<?php
    include_once 'layouts/nav.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
                <h1>Datos Personales</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../vista/adm_catalogo.php">Home</a></li>
              <li class="breadcrumb-item active">Datos Personales</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
</section>
    <section>
        <div class="content"> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-success card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img src="../img/mujer.png" class="profile-user-img img-fluid img-circle" alt="">
                                    </div>
                                    <input id="id_usuario" type="hidden" value="<?php echo $_SESSION['usuario']?>">
                                    <h3 id="nombre_us" class="profile-username text-center text-succes"> Nombre</h3>                                   </h3>
                                        <p  id="apellidos_us" class="text-muted text-center">Apellidos</p>
                                        <ul class="list-group list-group-unbordered mb-3" >
                                            <li class="list-group-item">
                                                <b style="color:#0b7300">Edad</b><a id="edad" class="float-right">12</a>
                                            </li>

                                            <li class="list-group-item">
                                                <b style="color:#0b7300">DNI</b><a id="dni_us" class="float-right">12</a>
                                            </li>

                                            <li class="list-group-item">
                                                <b style="color:#0b7300">Tipo Usuario</b><a class="float-right">12</a>
                                                    <span id="us_tipo" class="float-right badge badge-primary">Administrador</span>
                                            </li>
                                        </ul>
                                </div>
                        </div>
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-tittle">Sobre mi</h3>
                            </div>
                            <div class="card-body">
                                <strong style="color: #0b7300">
                                    <i class="fas fa-phone"></i>  Telefono
                                </strong>
                                <p  id="telefono_us" class="text-muted">4711952</p>

                                <strong style="color: #0b7300">
                                    <i class="fas fa-map-marker-alt mr-1"></i>  Direccion
                                </strong>
                                <p id="direccion_us" class="text-muted">Sacaba km 7/5</p>

                                <strong style="color: #0b7300">
                                    <i class="fas fa-smile-wink mr-1"></i> Correo
                                </strong>
                                <p  id="correo_us" class="text-muted">lyzfernandez</p>

                                <strong style="color: #0b7300">
                                    <i class="fas fa-smile-wink mr-1"></i> Sexo
                                </strong>
                                <p id="sexo_us" class="text-muted">Femenino</p>

                                <strong style="color: #0b7300">
                                    <i class="fas fa-pencil-alt mr-1"></i>  Informacion adicional
                                </strong>
                                <p id="adicional_us" class="text-muted">kj</p>
                                <button class="btn btn-block bg-gradient-danger ">Editar</button>

                            </div>
                            <div class="card-footer">
                                <p class="text-muted">Click en el boton si desea editar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-tittle">Editar datos personales</h3>
                            </div>
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="telefono" class="col-form-label col-sm-2">Telefono</label>
                                            <div class="col-sm-10">
                                            <input type="number" id="telefono" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="correo" class="col-form-label col-sm-2">Direccion</label>
                                            <div class="col-sm-10">
                                            <input type="text" id="correo" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sexo" class="col-form-label col-sm-2">sexo</label>
                                            <div class="col-sm-10">
                                            <input type="text" id="sexo" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="adicional" class="col-form-label col-sm-2">Informacio Adicional</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="adicional" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                      <div class="form-group row">
                                          <div class="offset-sm-2 col-sm-10 float-right">
                                              <button class="btn btn-block btn-outline-success">Guardar</button>
                                          </div>
                                      </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  
<?php
include_once 'layouts/footer.php';

?>
<script src="../js/Usuario.js"></script>