<?php 
include_once('../model/Router.php');
  
  $ruta = "";




  if(isset($_GET["param"])){
  $ruta=$_GET["param"];

};



switch ($ruta) {
  case 'boda':
    include(__DIR__.'../views/menuPrincipalBodaView.php');

    break;

    case 'ceremonia':
      include(__DIR__.'../views/menuPrincipalCeremoniaView.php');

      break;
  
  default:
  include(__DIR__.'../views/menuPrincipalBodaView.php');
    break;
}







