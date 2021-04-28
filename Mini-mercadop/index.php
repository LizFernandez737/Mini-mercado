<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type = "text/css"href="css/style.css">
    <link rel="stylesheet" type = "text/css"href="css/css/all.min.css">
</head>

<?php
session_start();
if(!empty($_SESSION['us_tipo'])){
    header('Location: controlador/LoginController.php');
}
else{
    session_destroy();
?>

<body>
  <div class="contenedor">
  <img class="wave" src="img/supermercado.png" alt="">
<div class="contenido-login">
<form action="controlador/LoginController.php" method="post">
  <h2>Iniciar Sesión</h2>
<div class="input-div dni">
<div class="i">
<i class="fas fa-user"></i>
</div>
<div class="div">
<h5>Usuario</h5>
<input type="text" name="user" class="input"> 
</div>
</div>
<div class="input-div pass">
<div class="i">
<i class="fas fa-lock"></i>
</div>
<div class="div">
<h5>Contraseña</h5>
<input type="password" name="pass" class="input">
</div>
</div><br>
<input type="submit" class="btn" value="iniciar sesion">
</form>
</div>  
  </div>
</body>
<script src="js/login.js"></script>
</html>
<?php
}
?>