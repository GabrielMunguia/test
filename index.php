<?php
try {
    define('DOCROOT', realpath(dirname(__FILE__)).'/');

    require_once('/controller\principal.php');
} catch (\Throwable $th) {
    echo $th->getMessage();
}


?>
