<?php  namespace Controllers;
  use Models\Comentarios as Comentarios;
  class comentariosController{
    //atributos
    private $comentarios;
    public function __construct(){
      $this->comentarios = new Comentarios();
    }
    public function index(){
      $datos = $this->comentarios->listar();
      return $datos;
    }
      public function agregar(){
        if($_POST){
           $this->comentarios->set("contenido", $_POST['contenido']);
           $this->comentarios->set("autor", $_POST['autor']);
           $this->comentarios->add();
           header("location: " . URL  . "comentarios");

       }

       }
       public function eliminar($id){
         $this->comentarios->set("id",$id);
         $this->comentarios->delete();
         header("location:" . URL . "comentarios");
     }


     public function editar($id){
       if(!$_POST){
         $this->comentarios->set("id",$id);
         $datos = $this->comentarios->view();
         return $datos;
       }
       else{
         $this->noticias->set("id",$id);
         $this->noticias->set("autor", $_POST['autor']);
         $this->noticias->set("contenido", $_POST['contenido']);
         $this->noticias->edit();
         header("location:" . URL . "noticias");

       }
     }
    }

    ?>
