<?php 
    include_once './config.php';

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if (isset($_POST['Register'])) {
        session_start();
        $info = $_POST;
        
        if(isset($info['email']) && isset($info['password'])){
            $email = validate($info['email']);

            $password = validate($info['password']);

            if (empty($email)) {

                header('Location: ../index.php?error=emptyUser name es required');
                exit();

            } else if (empty($password)) {
                
                header('Location: ../index.php?error=emptyPassword es required');
                exit();

            } else {

                $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
                $query->bindParam(':email', $email, PDO::PARAM_STR);
                $query->execute();

                if ($query->rowCount() > 0) {
                    echo '<p class="error">The email address is already registered!</p>';
                }

                if($query->rowCount() == 0) {
                    $query = $connection->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
                    //Vincular los parametros con los valores
                    $query->bindParam(':email', $email, PDO::PARAM_STR);
                    $query->bindParam(':password', $password, PDO::PARAM_STR);
                    $result = $query->execute();

                    if ($result) {
                        header('Location: ../Pages/home.php?message=successregister');
                    } else {
                        header('Location: ../Pages/home.php?message=errorregister');
                    }
                }
            }

        } else {
            echo "Not all fields are filled";
            header("Location: index.php");
            exit();
        }
               
    }

?>