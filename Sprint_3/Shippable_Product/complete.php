<?php
//find database
include_once('config.php');

$sql = "UPDATE ordersTable SET status='ready to pick up' WHERE orderid='$_GET[orderid]'";
        if ($conn->query($sql) === TRUE) {
            header("refresh:0;url=waitingList.php");
        } else {
            echo "Error update record: " . $conn->error;
        }
?>
