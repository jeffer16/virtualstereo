<?php  namespace Controllers;
use Models\Comentarios as Comentarios;
  class dashboardController{
    //atributos
    private $comentarios;
    public function __construct(){
      $this->comentarios = new Comentarios();
    }
    public function index(){

    }
      public function agregar(){
        if($_POST){
           $this->comentarios->set("contenido", $_POST['contenido']);
           $this->comentarios->set("autor", null);
           $this->comentarios->add();
           header("location: " . URL);

       }
       }
       public function eliminar($id){
     }


     public function editar($id){

       }

       public function login(){

       }

       public function dashboard(){

       }
    }

    ?>
