<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "crypto";

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn) {
    echo "Something went wrong. Database connection failed!";
}


?>