<?php 
    include '../loader.php';

    session_start();
    session_destroy();

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

?>