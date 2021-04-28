<?php
include_once 'Conexion.php';
class Usuario{
    var $objetos;
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    public function Loguearse($dni,$pass){
        $sql="SELECT * FROM usuario inner join tipo_us on us_tipo=id_tipo_us where dni_us=:dni and contrasena_us=:pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':dni' => $dni,':pass'=>$pass));
        $this->objetos = $query->fetchall();
        return $this->objetos;
       
    }
    public function obtener_datos($id){
        $sql="SELECT * FROM usuario join tipo_us on us_tipo=id_tipo_us and id_usuario=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id' => $id));
        $this->objetos= $query->fetchall();
        return $this->objetos;
       
    }
    function editar($id_usuario,$telefono,$direccion,$correo,$sexo,$adicional){
        $sql="UPDATE usuario SET telefono_us=:telefono,direccion_us=:direccion,correo_us=:correo,sexo_us=:sexo,adicional_us=:adicional where id_usuario=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id_usuario,':telefono'=>$telefono,':direccion'=>$direccion,':correo'=>$correo,':sexo'=>$sexo,':adicional'=>$adicional));
    }
}
?>