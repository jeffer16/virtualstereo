<?php namespace Models;
  class Noticias{

    private $id;
    private $titulo;
    private $contenido;
    private $con;

    //metodos

    public function __construct()
    {
      $this->con = new Conexion();
    }
    public function set($atributo, $contenido)
    {
      $this->$atributo = $contenido;
    }
    public function get($atributo){
      return $this->$atributo;
    }

    public function listar()
    {
      $sql = "select * from noticias";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "insert into noticias(titulo, contenido) VALUES('{$this->titulo}','{$this->contenido}')";
      //echo $sql;
      $this->con->consultaSimple($sql);
    }
    public function edit(){
      $sql = "updte noticias SET titulo = '{$this->titulo}', contenido = {$this->conenido} where id_noticia= {$this->id_noticia}";
      $this->con->consultaSimple($sql);
    }
    public function delete(){
      $sql = "delete from noticias where id_noticia = {$this->id_noticia}";
      $this->con->consultaSimple($sql);
    }
    public function view()
    {
      $sql = "select * from noticias WHERE id_noticia = '{$this->id_noticia}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = $datos->fetch(\PDO::FETCH_ASSOC);
      return $row;
      }
    }
?>
