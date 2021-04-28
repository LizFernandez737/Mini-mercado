<?php
session_start();
if($_SESSION['us_tipo']==1){
    include_once 'layouts/header.php';
?>

  <title>Productos</title>
<?php
    include_once 'layouts/nav.php';
?>
<link rel="stylesheet" href="../css/categoria.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Productos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Productos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
</section>
    <!-- /.content -->
    <section>
    
    <div class="contenedorr">
 

      <div class="elemento 3"><img src="../img/bebida.png" alt="Usuario" id="logo" width="180px" height="180px">
        <h4 class="title">Bebidas</h4>
        <button  class="boton">mostrar</button>
      </div>
      <div class="elemento 4"><img src="../img/pil.jpg" alt="Usuario" id="logo1" width="160px" height="120px">
        <h4 class="title">Lacteos</h4>
        <button class="boton">mostrar</button>
      </div>
      <div class="elemento 4"><img src="../img/helado.jpg" alt="Usuario" id="logo" width="190px" height="180px">
        <h4 class="title">Helados</h4>
        <button class="boton">mostrar</button>
      </div>
       <div class="elemento 4"><img src="../img/snack.jpg" alt="Usuario" id="logo" width="180px" height="180px">
        <h4 class="title">Snacks</h4>
        <button class="boton">mostrar</button>
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>