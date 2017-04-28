<?php
  define ('DS', DIRECTORY_SEPARATOR);
  define ('ROOT', realpath(dirname(__FILE__)) . DS);
  define ('URL', "http://localhost/proyecto/");
  require_once "Config/autoload.php";
  Config\autoload::run();
  require_once "Views/Templates/template.php";
  Config\enrutador::run(new Config\Request);
  // print_r($_GET['url']);


?>
