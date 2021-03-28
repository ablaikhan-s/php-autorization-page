<?php
include('includes/db.php');

$result = mysqli_query($connection, "SELECT * FROM `users`");
$users_count = mysqli_num_rows($result);
if ($users_count == 0)
{
    echo 'USERS table in Database is EMPTY!';
}
else{
for ( $i=1; $i<=$users_count; $i++ ) 
{
	$cat = mysqli_fetch_assoc($result);
	echo 'User ' . $cat['id'] . ': ' . $cat['login'] . ": ". $cat["password"] . '<br>';
}
}
?>
