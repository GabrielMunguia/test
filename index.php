<?php
try {
    define('DOCROOT', realpath(dirname(__FILE__)).'/');

    include('controller\principal.php');
    echo "123123";
} catch (\Throwable $th) {
    echo $th->getMessage();
}


?>
