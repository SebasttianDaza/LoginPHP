<?php 
    include '../loader.php';
    include_once '../SRC/JS/Data.php';
    session_start();
    
    if(!$_SESSION["authenticated"]) {
        header('Location: ../index.php?message=authenticatedfalse');
    }

    if ($_GET["message"] == "successlogin") {

        $nameUser = $_SESSION['name'];
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
                'urlJS' => '../SRC/JS/index.js',
            ] , 
            'template-base-html.html.twig'
        );
        $json = json_encode($nameUser);
        if(!isset($nameUser)) {
            echo "<script>console.log($json)</script>";
        }
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
                'urlJS' => '../SRC/JS/index.js',
            ],
            "template-base-html.html.twig"
        );
    }



   
?>