<?php 
    header('Access-Control-Allow-Origin: *');

    $nameUser;

    if(isset($_SESSION['session'])) {
        $nameUser = $_SESSION['session'];
    }
?>