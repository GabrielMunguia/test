<?php
class Router{
    private String $rutaPrincipal;

    public function __construct() {

     
        $data= sprintf( "%s://%s%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME'], $_SERVER['REQUEST_URI'] );;
        $this->rutaPrincipal= explode("controller",$data)[0];
    }

    //Esta funcion requiere una ruta para redireccionar tomando en cuenta la url base 
public   function Redireccionar($ruta=""){
    echo   $this->rutaPrincipal;
    
    header("Location:".$this->rutaPrincipal.$ruta);  exit();
    
}


  
}





?>