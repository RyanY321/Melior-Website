<?php

function check_login($con)
{

    if(isset($_SESSION['user_id']))
    {

        $id = $_SESSION['user_id'];
        $query = "selet * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login

    header("Location: /php/login.php");
    die;
}

function random_num($length)
{

    $text = "";
    if($length < 5)
    {
        $legth = 5;
    }

    $len = rand(4,$length);

    for ($i=0; $i < ; $i++){
        $text .= rand(0,9)''
    }

    return $text;
}