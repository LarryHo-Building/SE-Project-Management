<?php
include('config.php');

$sql = 'SELECT * FROM StaffMembers';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table><tr><th>ID</th><th>Name</th><th>Role</th><th>Actions</th></tr>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["role"] . "</td><td><a href=\"deletestaff.php?id=".$row['id']."\">Delete</a></tr>";
	}
	echo "</table>";
}
else {
	echo ($conn->error);
}

$conn->close();

?>
<html>

</html>