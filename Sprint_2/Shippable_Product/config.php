<?php
	define('DB_SERVER', 'remotemysql.com');
	define('DB_USERNAME', 'chaPE9rQ47');
	define('DB_PASSWORD', 's4fFYEccZk');
	define('DB_DATABASE', 'chaPE9rQ47');
	$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	
	//check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
?>