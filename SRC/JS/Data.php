<?php 
    header('Access-Control-Allow-Origin: *');

    if(!isset($_GET['remove'])) {
        echo $_GET['remove'];
    }
?>