<?php

$dbhost = "sql200.epizy.com	";
$dbuser = "epiz_32167828";
$dbpass = "u6xiiD9MBMiYg";
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("failed to connect to Melior Host. Please contact system Administrator.")
}
?>