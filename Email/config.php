<?php 
    define('USER', '271949_sebasttia');
    define('PASSWORD', 'sebastianDaza100/#');
    define('HOST', 'mysql-sebasttiandaza12.alwaysdata.net');
    define('DATABASE', 'sebasttiandaza12_login');
    try {
        $connection = new PDO('mysql:host='.HOST.';dbname='. DATABASE, USER, PASSWORD);
        echo "<script>console.log('Connected successfully')</script>";
        //Crear una tabla
        $sql = file_get_contents('../DataBase/createTable.sql');

        $connection->exec($sql);

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>