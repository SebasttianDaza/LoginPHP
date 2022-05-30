<?php 
    include '../loader.php';

    if($_GET["message"] == "successlogin") {
        echo renderViews(
            'success.html.twig', 
            [
                'titlePage' => 'Success',
                'title' => 'You have successfully logged in!',
                'text' => 'You can now access the application.',
                'textBtn' => 'Log out',
                'urlImage' => '../Public/Image/success.png',
                'urlCss' => '../SRC/CSS/success.css'
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
            ],
            "template-base-html.html.twig"
        );
    }

    if($_GET["message"] == "successregister") {
        echo renderViews(
            'success.html.twig',
            [
                'titlePage' => 'Success',
                'title' => "You've been successfully registered!",
                'text' => 'You can now access the application.',
                'textBtn' => 'Login',
                'urlImage' => '../Public/Image/success.png',
                'urlCss' => '../SRC/CSS/success.css'
            ],
            'template-base-html.html.twig'
        );
    }


    if($_GET["message"] == "errorregister") {
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
?>