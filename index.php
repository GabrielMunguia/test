<?php
try {
    define('DOCROOT', realpath(dirname(__FILE__)).'/');

    require __DIR__.'/controller\principal.php';
} catch (\Throwable $th) {
    echo $th->getMessage();
}


?>
