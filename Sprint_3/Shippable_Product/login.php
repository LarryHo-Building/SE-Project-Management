<?php
	include('config.php');
	session_start();
	
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
	// variables are the userid and password sent from the form
		$myuserid = $_POST['userid'];
		$mypassword = $_POST['password'];
	// searches the database if userid and password matches and query it
		$sql = "SELECT id, role FROM StaffMembers WHERE id='$myuserid' AND password='$mypassword'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
	
		// result matched $myuserid and $mypassword
		// the role will direct to a different index page
		if($count == 1) {
			//session_register("myuserid");
			$_SESSION['id'] = $myuserid;
			$_SESSION['role'] = $row['role'];
				if($row['role']=='staff') {
					header('location: index.php');
				}
				elseif($row['role']=='manager') {
					header('location: index.php');
				}
		}else {
			$error = "Login or Password is invalid";
		}
	}
?>












<!DOCTYPE html>
<html lang='en'>

  
        


    <head>
        <meta charset="utf-8">
        <title>Coffee a</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
        <link type="text/css" rel="stylesheet" href="css/materialize.css" />
        <link type="text/css" rel="stylesheet" href="css/main.css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <style type="text/css">
.box-wrap {
    text-align: center;
    background-color: #d4d4f5;
    
}
.box-wrap>div {
    width: 23%;
   
    margin: 1%;
    border-radius: 10%;
    float: left;
	
   
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  width:80%;
  margin-left: auto;
  margin-right: auto;
}

th, td {
  padding: 5px;
  width:20%;
  text-align: center;    
}
input[type=text], input[type=password]{
    width: 10% !important;
    border: 1px solid #000000!important;
    padding-left:10px !important;
	height: 900 !important;
}
label.a{
    font-size:0.8vw !important; 
    color:black !important;
    font-weight:bold !important;
}
form.a{
	text-align:center !important;
}



</style>
    </head>
	<body>
	        <nav>
            <div>
                <a href="index.php" class="brand-logo">4U Coffee</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse">
                    <i class="material-icons"><img src="img/Menu.png" class="image-Menu"/></i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li class="active">
                        <a href="index.php">HOME</a>
                    </li>
                   
                    <?php

                   session_start();
                    if ($_SESSION['role'] == 'staff'||$_SESSION['role'] == 'manager')
                    {
                        echo "<li><a href=\"logout.php\">LogOut</a></li>";
                        echo "<li><a href=\"waitingList.php\">Waiting list</a></li>";
                        
                    } 
                    else
                    {
                        echo "<li><a href=\"login.php\">Staff login</a></li>";
                        echo "<li><a href=\"waitingList1.php\">Waiting list</a></li>";
                    }
                    ?>
                  
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li class="active">
                        <a href="index.php">HOME</a>
                    </li>
                    <li>
                        <a href="">Staff login</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        <img src="img/index-header.jpg" class="image-header-div" />


		<h1 style="text-align:center">Login</h1>
		<form class='a' action = "" method = "post">
		<label class='a' for "userid">User ID</label><br>
		<input type="text" name="userid"><br>
		<label class='a' for "password">Password</label><br>
		<input type="password" name="password"><br>
		<input type="submit" value="Login"><br><br><br><br><br><br>
		</form>
		</body>
		</html>


