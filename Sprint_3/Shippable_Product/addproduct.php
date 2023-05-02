<?php
	include('config.php');
	
	
	$sql = "CREATE TABLE OrdersProducts (
	orderid VARCHAR(30) PRIMARY KEY,
    coffee1 INTEGER(50),
    size1 VARCHA(50),
    price1 INTEGER,
    coffee2 INTEGER(50),
    size2 VARCHA(50),
    price2 INTEGER,
    sandwich1 INT(50),
    price12 INTEGER,
    sandwich2 INTEGER(50),
    price22  INTEGER,
    cake1 INT(50),
    price13 INTEGER
    cake2 INTEGER(50),
    price23  INTEGER,
    totalPrice INTEGER
	)";
    
	if ($conn->query($sql) === TRUE) {
    echo "Tables created successfully";
	} else {
    echo "Error creating table: " . $conn->error;
	}
	
	$conn->close();
?>
