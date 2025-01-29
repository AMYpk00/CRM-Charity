<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c37ac7a1ae.js" crossorigin="anonymous"></script>

    <script src="./assets/script/script.js"></script>

    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <title>Home</title>
</head>

<body class="body-contact">

    <?php include(ROOT_PATH . "/app/fix/header.php"); ?>

    <div class="login">

        <h1>Login</h1>
        <br><br><br>

        <form action="login.php" method="post">

            <?php include(ROOT_PATH . "/app/additional/formErrors.php"); ?>

            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>">
            </div>
            <input type="submit" name="login-btn" value="Login">

        </form>
    </div>

</body>

</html>