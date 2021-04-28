<?php
session_start();
if($_SESSION['us_tipo']==2){
    include_once 'layouts/header.php';
?>

  <title>Vendedor</title>
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
            <h3>Panel Vendedor</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Panel administrativo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

<!-- Default box -->
  <!-- /.card-body -->

  <!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php
include_once 'layouts/footer.php';
}
else{
    header('Location: ../index.php');
}
?>
