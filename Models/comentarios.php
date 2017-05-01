<?php namespace Models;
  class Comentarios{

    private $id_comentario;
    private $comentario;
    private $autor;
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
      $sql = "select * from comentarios";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add()
    {
      $sql = "insert into comentarios(contenido,autor) VALUES('{$this->contenido}','{$this->autor}')";
      $this->con->consultaSimple($sql);
    }
    public function edit()
    {
      $sql = "update comentarios SET comentarios = '{$this->comentarios}', contenido = '{$this->conenido}' where id_comentario = {$this->id_comentario}";
      $this->con->consultaSimple($sql);
    }
    public function delete()
    {
      $sql = "DELETE FROM secciones WHERE id = {$this->id}";
      $this->con->consultaSimple($sql);
    }
    public function view()
    {
      $sql = "select * from comentarios where id_comentario = '{$this->id_comentario}'";
      $datos = $this->con->consultaRetorno($sql);
        $row = $datos->fetch(\PDO::FETCH_ASSOC);
        return $row;
      }
    }


?>
