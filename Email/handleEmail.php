<?php 
    $info = $_POST;

    //Si el valor del boton es igual a login llamar al file login.php
    if(isset($info['Login'])){
       include_once './login.php';
    } else if(isset($info['Register'])){
       include_once './register.php';
    }

?>