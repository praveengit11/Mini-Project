<?php

$email= "localhost";
$uname= "root";
$password = "";

$db_name = "minipro_db";

$conn = mysqli_connect($email, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
