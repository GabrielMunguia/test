<?php
try {


    include('controller/principal.php');
} catch (\Throwable $th) {
    echo $th->getMessage();
}


?>