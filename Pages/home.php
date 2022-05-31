<?php 
    include '../loader.php';

    if ($_GET["message"] == "successlogin") {
        $nameUser = $_SESSION['user'];
        echo renderViews(
            'success.html.twig', 
            [
                'titlePage' => 'Success',
                'title' => 'You have successfully logged in!' . $nameUser,
                'text' => 'You can now access the application.',
                'textBtn' => 'Log out',
                'urlImage' => '../Public/Image/success.png',
                'urlCss' => '../SRC/CSS/success.css',
                'idBtn' => 'getoutlogin',
                'urlJS' => '../SRC/index.js',
            ] , 
            'template-base-html.html.twig'
        );
        
    }

    if($_GET["message"] == "errorlogin") {
        echo renderViews(
            'error.html.twig',
            [
                'titlePage' => 'Error Login',
                'title' => 'Oops! Something went wrong.',
                'text' => "You can't now access the application.",
                'textBtn' => 'Get back',
                'urlImage' => '../Public/Image/success.png',
                'urlCss' => '../SRC/CSS/error.css',
                'idBtn' => 'getoutindex',
                'urlJS' => '../SRC/index.js',
            ],
            "template-base-html.html.twig"
        );
    }



   
?>