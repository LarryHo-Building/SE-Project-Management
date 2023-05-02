<?php
	include('config.php');
	
#	$sql = "CREATE TABLE StaffMembers (
#	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
#	name VARCHAR(20) NOT NULL,
#	password  VARCHAR(20) NOT NULL,
#	role VARCHAR(10) NOT NULL
#	)";
		
#	$sql = "CREATE TABLE Orders (
#	orderid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
#	status VARCHAR(10) NOT NULL
#	)";
	
	$sql = "CREATE TABLE OrdersItems (
	orderid INT(6) NOT NULL,
	itemid INT(6) NOT NULL,
	PRIMARY KEY (orderid, itemid),
	CONSTRAINT FOREIGN KEY (orderid) REFERENCES Orders(orderid),
	CONSTRAINT FOREIGN KEY (itemid) REFERENCES Items(itemid)
	)";
	
#	$sql = "CREATE TABLE Items (
#	itemid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
#	itemname VARCHAR(20) NOT NULL,
#	itemtype VARCHAR(20) NOT NULL,
#	price INT(3) NOT NULL,
#	avability VARCHAR(3) NOT NULL 
#	)";
	
#	$sql = "CREATE TABLE Coffee (
#	coffeeid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
#	coffeename VARCHAR(20) NOT NULL,
#	size VARCHAR(1) NOT NULL,
#	qty INT(1) NOT NULL
#	)";


	if ($conn->query($sql) === TRUE) {
    echo "Tables created successfully";
	} else {
    echo "Error creating table: " . $conn->error;
	}
	
	$conn->close();
?>
