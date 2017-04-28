<?php namespace Models;
  class Conexion{
    //atributos
    private $user = "root";
    private $pass = "";
    private $con;

    public function __construct(){
      $this->con = new \PDO('mysql:host=localhost:3306;dbname=emisora', $this->user, $this->pass);

    }

    public function consultaSimple($sql){
      $this->con->exec($sql);

    }

    public function consultaRetorno($sql){
      $datos = $this->con->query($sql);
      return $datos;
    }
  }

?>
