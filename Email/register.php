<?php 
    session_start();
    include_once '../loader.php';
    include_once './config.php';
    include_once './validate.php';

    if (isset($_POST['Register'])) {
        $info = $_POST;
        
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
                        echo renderViews(
                            'success.html.twig',
                            [
                                'titlePage' => 'Success',
                                'title' => 'You have successfully logged in!',
                                'text' => 'You can now access the application.',
                                'textBtn' => 'Log out',
                                'urlImage' => '../Public/Image/success.png',
                                'urlCss' => '../SRC/CSS/success.css'
                            ],
                            'template-base-html.html.twig'
                        );
                    } else {
                        echo renderViews(
                            'error.html.twig',
                            [
                                'titlePage' => 'Error Login',
                                'title' => 'You have successfully logged in!',
                                'text' => 'You can now access the application.',
                                'textBtn' => 'Log out',
                                'urlImage' => '../Public/Image/success.png',
                                'urlCss' => '../SRC/CSS/error.css',
                            ],
                            "template-base-html.html.twig"
                        );
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