<?php
try {
    define('DOCROOT', realpath(dirname(__FILE__)).'/');

    include('controller\principal.php');
} catch (\Throwable $th) {
    echo $th->getMessage();
}


?>
