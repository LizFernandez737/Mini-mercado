<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>login</title>
  </head>
  <body >

    <div  class = " login-box " >
      <img  src = "Imagenes/usuario.png" class = " avatar " alt = " Imagen de Avatar " >
      <h1> Iniciar sesión </h1>
      <div  class="row"> 
        <div class="col-sm-4"></div>
        <div class="col-sm-4">

        <form>
        <!--ENTRADA DE USUARIO-->
        <label  para = " nombre de usuario " > USUARIO </label>
        <input  type = " text " placeholder = " usuario " class="form-control">
        <!--ENTRADA DE CONTRASEÑA-->
        <label for = " contraseña " > CONTRASEÑA </label>
        <input type = " password " placeholder = " Password " class="form-control">
        <a  href = " # " > ¿Olvidaste  tu contraseña? </a>
        <br>
        <button class="btn btn-primary"> <img  src = "Imagenes/iniciar-sesion.png" class = " avatarIS " alt = " Imagen de AvatarIS " > Iniciar Sesión</button>
        <!--<input type = " submit " value = " Iniciar sesión ">-->
      </form >

        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>
  </body>
</html>