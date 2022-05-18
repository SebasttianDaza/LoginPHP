<?php
    function validate($data) {
        //Quitar espacios en blanco
        $data = trim($data);
        //Quitar etiquetas html
        $data = stripslashes($data);
        //Quitar etiquetas php
        $data = htmlspecialchars($data);
        return $data;
    }

?>