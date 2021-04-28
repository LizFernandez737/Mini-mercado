<?php
session_start();
if($_SESSION['us_tipo']==1){
    include_once 'layouts/header.php';
?>

  <title>Productos/bebidas</title>
<?php
    include_once 'layouts/nav.php';
?>
<link rel="stylesheet" href="../css/bebidas.css">
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
    
    <div class="contenedor">
        <form class="form-inline my-2 my-lg-0" style="background: transparent; width:100%; margin-left: 40%; padding:10px;">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar producto" aria-label="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0 " type="submit">Buscar</button>
        </form>
       
       <br>               
       <div class="elemento 3"><img src="img/coca.jpg" alt="Usuario" id="logo" width="110px" height="110px">       
        <p class="caja">Producto: Coca cola 3 litros</p>             
        <p class="caja">Precio: 13bs.</p> 
        <p class="caja">Tipo: bebida</p> 
       </div>
       <div class="elemento 3"><img src="img/fanta.jpg" alt="Usuario" id="logo" width="110px" height="110px">       
        <p class="caja">Producto: Coca cola 3 litros</p>             
        <p class="caja">Precio: 13bs.</p> 
        <p class="caja">Tipo: bebida</p>           
       </div>
       <div class="elemento 3"><img src="img/sprite.png" alt="Usuario" id="logo" width="110px" height="110px">
        <p class="caja">Producto: Coca cola 3 litros</p>             
        <p class="caja">Precio: 13bs.</p> 
        <p class="caja">Tipo: bebida</p> 
       </div>
       <div class="elemento 3"><img src="img/redbull.png" alt="Usuario" id="logo" width="110px" height="110px">      
         <p class="caja">Producto: Coca cola 3 litros</p>             
         <p class="caja">Precio: 13bs.</p> 
         <p class="caja">Tipo: bebida</p>          
       </div>
       <div class="elemento 3"><img src="img/agua.jpg" alt="Usuario" id="logo" width="110px" height="110px">
        <p class="caja">Producto: Coca cola 3 litros</p>             
        <p class="caja">Precio: 13bs.</p> 
        <p class="caja">Tipo: bebida</p> 
       </div>
       <div class="elemento 3"><img src="img/monster.jpg" alt="Usuario" id="logo" width="110px" height="110px">
        <p class="caja">Producto: Coca cola 3 litros</p>             
        <p class="caja">Precio: 13bs.</p> 
        <p class="caja">Tipo: bebida</p> 
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