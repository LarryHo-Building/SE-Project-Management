<?php

// form 
include('config.php');
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$myname = $_POST['name'];
	$mypassword = $_POST['password'];
	$myrole =$_POST['role'];
	
	$sql = "INSERT INTO StaffMembers (name, password, role) VALUES ('$myname', '$mypassword', '$myrole')";
	
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}


?>

<html>

<form action="" method="post">
<label>Name: </label><input type='text' name='name'/><br>
<label>Password: </label><input type='password' name='password' /><br>
<label>Role: </label>
<select name='role'>
	<option value='staff'>Staff</option>
	<option value='manager'>Manager</option>
</select>
<input type='submit'>Add</form>
</form>

</html>