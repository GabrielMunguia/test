<?php 
include_once('../model/Router.php');
  
  $ruta = "";




  if(isset($_GET["param"])){
  $ruta=$_GET["param"];

};



switch ($ruta) {
  case 'boda':
    include('../views/menuPrincipalBodaView.php');

    break;

    case 'ceremonia':
      include('../views/menuPrincipalCeremoniaView.php');

      break;
  
  default:
  include('../views/menuPrincipalBodaView.php');
    break;
}







