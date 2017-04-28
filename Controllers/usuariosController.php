<?php  namespace Controllers;
use Models\Usuarios as Usuarios;
use Models\Roles as Roles;

  class usuariosController{
    //atributos
    private $usuarios;
    private $roles;

    public function __construct(){
      $this->usuarios = new Usuarios();
      $this->roles = new Roles();

    }
    public function index(){
      $datos = $this->usuarios->listar();
      return $datos;
    }
    public function agregar(){
      if(!$_POST){
        $datos = $this->roles->listar();
        return $datos;
     }
  //  else {
  //    $permitidos = array("image/jpeg","image/png","image/gif","image/jpg");
  //    $limite = 700;
  //    if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024){
  //      $nombre = date("is") . $_FILES['imagen']['name'];
  //      $ruta = "Views" . DS . "Templates" . DS . "imagenes" . DS . "avatars" . DS . $nombre;
  //      move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
  //     //  $this->estudiante->set("id", $_POST['id']);
  //      $this->estudiante->set("nombre", $_POST['nombre']);
  //      $this->estudiante->set("edad", $_POST['edad']);
  //      $this->estudiante->set("promedio", $_POST['promedio']);
  //      $this->estudiante->set("imagen", $nombre);
  //      $this->estudiante->set("id_seccion", $_POST['id_seccion']);
  //      $this->estudiante->add();

        // header("location: " . URL . "estudiantes");
  //      }
  //    }
  //  }
   public function editar($id){
     if(!$_POST){
       $this->usuarios->set("id" , $id);
       $datos = $this->usuarios->view();
       return $datos;
     }
     else{

       $this->usuarios->set("id", $id);
       $this->usuarios->set("nombre", $_POST['nombre']);
       $this->usuarios->set("contraseña", $_POST['contraseña']);
       $this->usuarios->set("email", $_POST['email']);
       $this->usuarios->set("id_rol", $_POST['id_rol']);
       $this->usuarios->edit();
       header("location:" . URL . "usuarios");

     }

   }

     public function ver($id){
       if(!$_POST){
         $this->usuarios->set("id" , $id);
         $datos = $this->usuarios->view();
         return $datos;
       }
       else{
         $this->usuarios->set("id", $id);
         $this->usuarios->set("nombre", $_POST['nombre']);
         $this->usuarios->set("contraseña", $_POST['contraseña']);
         $this->usuarios->set("email", $_POST['email']);
         $this->usuarios->set("id_rol", $_POST['id_rol']);
         header("location:" . URL . "usuarios");

       }
    }
    public function listarSecciones(){
      $datos = $this->roles->listar();
      return $datos;

    }
    public function eliminar($id){
      $this->usuarios->set("id",$id);
      $this->usuarios->delete();
      header("location:" . URL . "usuarios");
      return $datos;

    }
 }
 $estudiantes = new usuariosController();
?>
