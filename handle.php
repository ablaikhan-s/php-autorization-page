<?php
include('includes/db.php');
//include('includes/users_in_db.php'); //List of users in db

$login = $_POST["login"];
$password = $_POST["password"];

$count_req = mysqli_query($connection, "SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");
if ( mysqli_num_rows($count_req) == 0 ) 
{
	echo "You aren't authorized!<br>";
} else {
	echo "Hello, " . $login . "!!!<br>";
}


