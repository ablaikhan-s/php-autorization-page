<?php

$connection = mysqli_connect('localhost', 'debian-sys-maint', '3PQ8dj4nYJI6UEBK', 'test_db'); //Подключение к БД =>  mysqli_connect('адрес сервера с БД', 'Имя пользователя СУБД', 'Пароль пользователя СУБД', 'Имя базы данных')

if ( $connection == false )
{
	echo "Couldn\'t resolve connection to database!<br>";
	echo mysqli_connect_error();
	exit(); 
} 
?>