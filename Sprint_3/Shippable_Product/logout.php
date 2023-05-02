<?php
	include('config.php');
	session_start();
	$_SESSION['id'] = 0;
	$_SESSION['role'] = 'customer';
	header('location: index.php');
	
?>


