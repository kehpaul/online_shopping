<?php

$servername = "localhost";
$username = "thismaze_main";
$password = "king1234";
$db = "thismaze_onlineshopping";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>