<!DOCTYPE html>
<html>
  <head>
    <meta charset = " utf-8 ">
    <title>Login design| XD</title>

    
    <link rel="stylesheet" href="<?= base_url() ?>/plantilla/css/login.css">
  </head >
  <body>

    <div  class = " login-box " >
      <img  src = "Imagenes/usuario.png" class = " avatar " alt = " Imagen de Avatar " >
      <img  src = "Imagenes/iniciar-sesion.png" class = " avatarIS " alt = " Imagen de AvatarIS " >
      <h1> Iniciar sesión </h1>
      <form>
        <!--ENTRADA DE USUARIO-->
        <label  para = " nombre de usuario " > USUARIO </label>
        <input  type = " text " placeholder = " Email " >
        <!--ENTRADA DE CONTRASEÑA-->
        <label for = " contraseña " > CONTRASEÑA </label>
        <input type = " password " placeholder = " Password ">
        <a  href = " # " > ¿Olvidaste  tu contraseña? </a><br>
        <input type = " submit " value = " Iniciar sesión ">
      </form >
    </div>
  </body>
</html>