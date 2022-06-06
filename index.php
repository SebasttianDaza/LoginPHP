<?php
    require_once './vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('./views');

    $twig = new \Twig\Environment($loader, [
        'cache' => false,
    ]);

    $base = $twig->load('./Templates/template-base-html.html.twig');

    if($_GET['message'] === "logout") {
        session_start();
        session_destroy();
        header('Location: ./index.php');
    }

    if($_GET['message'] === "authenticatedfalse") {
        echo "<script>alert('You must log in to access the application.');</script>";
    }
    
    echo $twig->render('index-default.html.twig', 
    array('base' => $base, 'handle' => './Email/handleEmail.php'));


    
?>