<?php
//find database
include_once('config.php');

$sql = "DELETE FROM ordersTable WHERE orderid='$_GET[orderid]'";
        if ($conn->query($sql) === TRUE) {
            header("refresh:0;url=waitingList.php");
        } else {
            echo "Error deleting record: " . $conn->error;
        }
?>