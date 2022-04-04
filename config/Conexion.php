<?php 
$servidor = "localhost";

$usuario ="root";

$password="root";
$dbName="";

try{

    $conexion = new PDO("mysql:host=$servidor;dbname=$dbName",$usuario,$password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "Base de datos conectada";

}catch(PDOException $e){
 echo $e;
}

?>