<?php
session_start();

    include("/php/connection.php");
    include("/php/functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: /php/login.php");
            die;
        }else
        {

            echo "Please enter some valid information!";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Melior Media - Signup</title>
        <meta name="description" content="">
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
        <div id="box">

            <form method="post">
                <div style="font-size: 20px; margin: 10px; color: white;">Signup</div>
                <input id="text" type="text" name="user_name"><br><br>
                <input id="text" type="password" name="password"><br><br>

                <input id="button" type="submit" name="Signup"><br><br>

                <a href="/php/login.php">Click to Login</a><br><br>
            </form>
        </div>
        <script src="/js/script.js" async defer></script>
    </body>
</html>

<style>
    #text {
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button {
        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }

    #box {
        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;
    }
</style>