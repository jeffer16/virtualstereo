<?php  namespace Controllers;
  use Models\Noticias as Noticias;
  class noticiasController{
    //atributos
    private $noticias;
    public function __construct(){
      $this->noticias = new Noticias();
    }
    public function index(){
      $datos = $this->noticias->listar();
      return $datos;
    }
      public function agregar(){
        //echo "agregar";
        if($_POST){
           $this->noticias->set("titulo", $_POST['titulo']);
           $this->noticias->set("contenido", $_POST['contenido']);
           $this->noticias->add();
           header("location: " . URL."dashboard/dashboard");
       }

       }
       public function eliminar($id){
         $this->noticias->set("id",$id);
         $this->noticias->delete();
         header("location:" . URL . "noticias");
     }
     public function agregarPatrocinador(){
       
     }


     public function editar($id){
       if(!$_POST){
         $this->noticias->set("id",$id);
         $datos = $this->noticias->view();
         return $datos;
       }
       else{
         $this->noticias->set("id",$id);
         $this->noticias->set("titulo", $_POST['titulo']);
         $this->noticias->set("contenido", $_POST['contenido']);
         $this->noticias->edit();
         header("location:" . URL . "noticias");

       }
     }
    }

    ?>
