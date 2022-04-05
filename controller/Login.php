<?php 
define('DOCROOT', realpath(dirname(__FILE__)).'/');
include_once('../model/Router.php');
  
  $ruta = "";

if(isset($_GET["param"])){
  $ruta=$_GET["param"];

};



switch ($ruta) {
  case 'boda':
    include(__DIR__.'../views/loginBodaView.php');

    break;

    case 'ceremonia':
      include(__DIR__.'../views/loginCeremoniaView.php');

      break;
  
  default:

  require_once(DOCROOT .'../views/loginBodaView.php');
    break;
}




if($_POST){

  $router = new Router();
  $router->Redireccionar("controller/Login.php?param=ceremonia");


}


