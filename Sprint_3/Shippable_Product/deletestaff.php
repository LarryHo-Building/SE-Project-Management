<?php 
include('config.php');

$id = $_GET['id']; // define $id

mysqli_query($conn, "DELETE FROM StaffMembers WHERE id='".$id."'");
mysqli_close($conn);
header('Location: stafftable.php');
?>