<?php 
include_once('../model/Router.php');
  
  $ruta = "";

if(isset($_GET["param"])){
  $ruta=$_GET["param"];

};



switch ($ruta) {
  case 'boda':
    include('../views/loginBodaView.php');

    break;

    case 'ceremonia':
      include('../views/loginCeremoniaView.php');

      break;
  
  default:
  include('../views/loginBodaView.php');
    break;
}




if($_POST){

  $router = new Router();
  $router->Redireccionar("controller/Login.php?param=ceremonia");


}


