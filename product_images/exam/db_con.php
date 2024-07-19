<?php
$_servername = "localhost";
$_username = "root";
$_password = "";

$con = mysqli_connect($_servername,$_username,$_password);

if(!$conn) {
    die("connection faild :" .  mysqli_connect_error());

}

