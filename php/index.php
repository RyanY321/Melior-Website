<?php
session_start();

    include("/php/connection.php");
    include("/php/functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Melior Media - PHP</title>
        <meta name="description" content="Melior Media PHP">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="icon" type="png/image" href="/images/favicon/MeliorMediaLogo.png">
    </head>
    <body>
        <nav class="navbar">
            <div class="brand-title">Melior Media</div>
            <a href="#" class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="navbar-links">
                <ul>
                    <li><a href="https://www.meliormedia.ml/">Homepage</a></li>
                    <li><a href="/pages/about">About Melior Media</a></li>
                    <li><a href="/php/login.php">Melior Login</a></li>
                    <li><a href="/php/signup.php">Melior Sign Up</a></li>
                    <li><a href="pages/melior-shop">Melior Media Shop</a></li> 
                </ul> 
            </div>
        </nav>
        <h1>This is the main PHP page of Melior Media</h1>
        <a href="/php/logout.php">Logout</a>

        <br>
        Hello,  <?php echo $user_data['user_name']; ?>
        <script src="/js/script.js" async defer></script>
    </body>
</html>