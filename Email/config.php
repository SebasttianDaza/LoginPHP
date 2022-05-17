<?php 
    define('USER', 'root');
    define('PASSWORD', 'root');
    define('HOST', 'localhost');
    define('DATABASE', 'Login');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>