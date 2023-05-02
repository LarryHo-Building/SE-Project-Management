<?php
include("config.php");

$sql = "DROP TABLE StaffMembers";

$sql = "DROP TABLE Coffee";

#$sql = "DROP TABLE Orders";
	
	if ($conn->query($sql) === TRUE) {
    echo "Tables dropped successfully";
	} else {
    echo "Error creating table: " . $conn->error;
	}
	
	$conn->close();
?>