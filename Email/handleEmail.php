<?php 
    $info = $_POST;

    //Show attributes of the array on console

    if(isset($info['email']) && isset($info['password'])){

        function validate($data) {
            //Quitar espacios en blanco
            $data = trim($data);
            //Quitar etiquetas html
            $data = stripslashes($data);
            //Quitar etiquetas php
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($info['email']);
        //Para que no se vea el password
        $password = validate($info['password']);

        if (empty($email)) {
            header('Location: index.php?error=emptyUser name es required');
            exit();
        } else if (empty($password)) {
            header('Location: index.php?error=emptyPassword es required');
            exit();
        } else {
            echo "Valid data";
        }

    } else {
        echo "Not all fields are filled";
        header("Location: index.php");
        exit();
    }

    var_dump($info);

?>