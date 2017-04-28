<?php  namespace Controllers;
  use Models\Roles as Roles;
  class rolesController{
    //atributos
    private $roles;
    public function __construct(){
      $this->roles = new Roles();
    }
    public function index(){
      $datos = $this->roles->listar();
      return $datos;
    }
      public function agregar(){
        if($_POST){
           $this->roles->set("nombre", $_POST['nombre']);
           $this->roles->add();
           header("location: " . URL  . "roles");

       }

       }
       public function eliminar($id){
         $this->roles->set("id",$id);
         $this->roles->delete();
         header("location:" . URL . "roles");
     }


     public function editar($id){
       if(!$_POST){
         $this->roles->set("id",$id);
         $datos = $this->roles->view();
         return $datos;
       }
       else{
         $this->noticias->set("id",$id);
         $this->noticias->set("nombre", $_POST['nombre']);
         $this->noticias->edit();
         header("location:" . URL . "roles");

       }
     }
    }

    ?>
