<?php namespace Models;
  class Usuarios{

    private $id;
    private $nombre;
    private $contraseña;
    private $email;
    private $id_rol;
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
      $sql = "select * from usuarios u INNER JOIN roles r on u.id_rol=r.id_rol";
      $datos = $this->con->consultaRetorno($sql);
      return $datos;
    }

    public function add(){
      $sql = "insert into usuarios(nombre, contraseña,email,id_rol) VALUES('{$this->nombre}',{$this->contraseña},{$this->email}',{$this->id_rol}')";
      echo "$sql";
      $this->con->consultaSimple($sql);
    }
    public function edit(){
      $sql = "updte usuarios SET nombre = '{$this->nombre}', contraseña = {$this->contraseña}, email = {$this->email}', id_rol = {$this->id_rol} where id_usuario= {$this->id_usuario}";
      $this->con->consultaSimple($sql);
    }
    public function delete(){
      $sql = "delete from usuarios where id_usuario = {$this->id_usuario}";
      $this->con->consultaSimple($sql);
    }
    public function view()
    {
      $sql = "select * from usuarios u INNER JOIN roles r on  u.id_rol=r.id_rol WHERE id_usuario  = '{$this->id_usuario}'";
      $datos = $this->con->consultaRetorno($sql);
      $row = $datos->fetch(\PDO::FETCH_ASSOC);
      return $row;
      }
    }
?>
