<?php  namespace Controllers;
use Models\Comentarios as Comentarios;
use Models\Noticias as Noticias;
use Models\Usuarios as Usuarios;

  class dashboardController{
    //atributos
    private $comentarios;
    private $noticias;

    public function __construct(){
      $this->comentarios = new Comentarios();
      $this->noticias = new Noticias();

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
         if($_POST){
           //echo $_POST['emaillogin'];
           //echo $_POST['passlogin'];
           $usuario=new Usuarios();
           $usuario->set("password",$_POST['passlogin']);
           $usuario->set("email",$_POST['emaillogin']);
           $user=$usuario->login();
           //print_r($user);
           //print_r(count($user));
           if(count($user)>1){
             header('Location:'.URL.'noticias/agregar');
           }else{
             header('Location:'.URL.'dashboard/login');
           }
         }
       }

       public function dashboard(){

       }

       public function listarNoticias(){
         $datos = $this->noticias->listar();
         return $datos;
       }
       public function listarComentarios(){
         $datos = $this->comentarios->listar();
         return $datos;
       }

       public function sendEmail(){
         $para      = 'maasprilla35@misena.edu.co';
         $titulo    = 'Correo de Contacto';
         $mensaje   = $_POST['message'];
         $cabeceras = 'From: '.$_POST['email'];

         mail($para, $titulo, $mensaje, $cabeceras);
         return true;
       }
    }

    $dash= new dashboardController();

    ?>
