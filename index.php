<?php
    require_once './vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('./views');

    $twig = new \Twig\Environment($loader, [
        'cache' => false,
    ]);

    $base = $twig->load('./Templates/template-base-html.html.twig');

    
    echo $twig->render('index-default.html.twig', 
    array('base' => $base, 'handle' => './Email/handleEmail.php'));
    
?>