<?php 

  //$mysqli = new mysqli('localhost', 'root', '', 'DIPLOM2');

	/*define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'DIPLOM2');

	$mysql = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if ($mysql->connect_errno) exit('Помилка підключення до БД');
	$mysql->set_charset('utf8');
	$mysql->close();*/

	$conn = new mysqli ("localhost", "root", '', "DIPLOM2");
		if($conn->connect_error){
			die("Connection Failed".$conn->connect_error);
		}
		

	


	

 ?>