<?php  namespace Controllers;
  use Models\Patrocinadores as Patrocinadores;
  class patrocinadoresController{
    //atributos
    private $patrocinadores;
    public function __construct(){
      $this->patrocinadores = new Patrocinadores();
    }
    public function index(){
      $datos = $this->patrocinadores->listar();
      return $datos;
    }
      public function agregar(){
        if($_POST){
           $this->patrocinadores->set("nombre", $_POST['nomre']);
           $this->patrocinadores->set("descripcion", $_POST['descripcion']);
           $this->patrocinadores->set("url", $_POST['url']);
           $this->patrocinadores->add();
           header("location: " . URL  . "patrocinadores");

       }

       }
       public function eliminar($id){
         $this->patrocinadores->set("id",$id);
         $this->patrocinadores->delete();
         header("location:" . URL . "patrocinadores");
     }


     public function editar($id){
       if(!$_POST){
         $this->patrocinadores->set("id",$id);
         $datos = $this->patrocinadores->view();
         return $datos;
       }
       else{
         $this->patrocinadores->set("id",$id);
         $this->patrocinadores->set("nombre", $_POST['nombre']);
         $this->patrocinadores->set("descripcion", $_POST['descripcion']);
         $this->patrocinadores->set("url", $_POST['url']);
         $this->patrocinadores->edit();
         header("location:" . URL . "patrocinadores");

       }
     }
    }

    $comentario = new patrocinadoresController();

    ?>
