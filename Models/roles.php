<?php namespace Models;
  class Roles{

    private $id;
    private $nombre;
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
      $sql = "select * from roles";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "insert into roles(nombre) VALUES('{$this->nombre}')";
      echo "$sql";
      $this->con->consultaSimple($sql);
    }
    public function edit(){
      $sql = "updte roles SET nombre = '{$this->nombre} where id_rol= {$this->id_rol}";
      $this->con->consultaSimple($sql);
    }
    public function delete(){
      $sql = "delete from roles where id_rol = {$this->id_rol}";
      $this->con->consultaSimple($sql);
    }
    public function view()
    {
      $sql = "select * from roles WHERE id_rol = '{$this->id_rol}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = $datos->fetch(\PDO::FETCH_ASSOC);
      return $row;
      }
    }
?>
