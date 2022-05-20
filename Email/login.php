<?php 
    //Crear una session o renaudar la actual
    session_start();
    include_once './config.php';
    include_once './validate.php';

    $info = $_POST;

    if(isset($info['Login'])) {
        if(isset($info['email']) && isset($info['password'])){
    
            $email = validate($info['email']);
            $password = validate($info['password']);
    
            if (empty($email)) {
                header('Location: index.php?error=emptyUser name es required');
                exit();
            } else if (empty($password)) {
                header('Location: index.php?error=emptyPassword es required');
                exit();
            } else {
                //Check if the user exists
                $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
    
                $query->bindParam(':email', $email, PDO::PARAM_STR);
                $query->execute();

                //Falta saber para que sirve fetch
                $result = $query->fetch(PDO::FETCH_ASSOC);

                if (!$result) {
                    echo '<p class="error">The user does not exist!</p>';
                } else {
                    if(password_verify($password, $result['password'])){
                        $_SESSION['user_id'] = $result['id'];
                        echo '<p class="success">The user has been logged successfully!</p>';
                    } else {
                        echo '<p class="error">The password is incorrect!</p>';
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