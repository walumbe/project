<?php 
	DEFINE('db_server','localhost');
	DEFINE('username','root');
	DEFINE('password','');
	DEFINE('database','mush');

	$link = mysqli_connect(db_server,username,password,database);

	if ($link ===false){
		die("Connection error".mysqli_connect_error());
	}
?>