<?php 
    define('USER', 'sebasttiandaza');
    define('PASSWORD', 'sebastianDaza100/#');
    define('HOST', 'localhost');
    define('DATABASE', 'Login');
    try {
        $connection = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);
        echo "<script>console.log('Connected successfully')</script>";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>