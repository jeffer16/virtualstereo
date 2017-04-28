<?php  namespace Config;

  class enrutador{
    public static function run(Request $request){
      $controlador = $request->getControlador() . "Controller";
      $ruta = ROOT . "Controllers" . DS . $controlador . ".php";
      $metodo = $request->getMetodo();
      $argumento = $request->getArgumento();
      if(is_readable($ruta)){
        require_once $ruta;
        $mostrar = "Controllers\\" . $controlador;
        $controlador = new $mostrar;
        if(!isset($argumento)){
          $datos = call_user_func(array($controlador, $metodo));
        }
        else{
          $datos = call_user_func_array(array($controlador, $metodo), $argumento);
        }
      }
      //cargar la Vista
      $ruta = ROOT . "Views" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
      if(is_readable($ruta)){
        require_once $ruta;
      }
      else{
        print "!!!NO SE ENCONTRO LA RUTA!!!";
      }
    }

  }




 ?>
