<?php
try {
    define('DOCROOT', realpath(dirname(__FILE__)).'/');

    include_once('controller\principal.php');
    echo "123123";
} catch (\Throwable $th) {
    echo $th->getMessage();
}


?>
