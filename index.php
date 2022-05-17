<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="CSS/index.css">

    <!-- Google Font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <section class="content">
        <article class="contentImage">
            <img src="Image/draw2.webp" alt="image of login">
        </article>


        <form action="Email/handleEmail.php" method="POST" enctype="multipart/form-data" class="form">
            <div class="control-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required placeholder="Username o email" autocomplete="false">
            </div>
            <div class="control-group">
                <label for=" password">Password</label>
                <input type="password" name="password" id="password" required placeholder="Your password" autocomplete="false">
            </div>
            <div class="control-group">
                <input type="submit" value="Log In">
            </div>
        </form>
    </section>
</body>

</html>