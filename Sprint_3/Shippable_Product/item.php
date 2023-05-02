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
  width:60%;
  margin-left: auto;
  margin-right: auto;
}

th, td {
  padding: 5px;
  width:33%;
  text-align: center;    
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



        <h1 style="text-align:center;">Order Detail</h1>
        <table id="asd">
        <tr>
        <th>Name of attribute</th>
        <th>Number</th>
        <th>size</th>
        </tr>
        <?php
            include_once('config.php');
            $sqlget="SELECT * FROM ordersTable WHERE orderid='$_GET[orderid]'";
            $result=$conn->query($sqlget);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {    
                    $id=$_GET["orderid"];
                     $status="status";
                    echo "<tr><td>OrderId</td><td>". $id ."</td><td></td></tr>";
                    echo "<tr><td>Status</td><td> ". $row["status"]. "</td><td></td></tr>";
                    echo "<tr><td>coffee 1</td><td> ". $row["coffee1"]. "</td><td> ". $row["size1"]. "</td></tr>";
                    echo "<tr><td>coffee 2</td><td> ". $row["coffee2"]. "</td><td> ". $row["size2"]. "</td><tr>";
                    echo "<tr><td>cake 1</td><td> ". $row["cake1"]. "</td><td></td></tr>";
                    echo "<tr><td>cake 2</td><td> ".$row["cake2"]. "</td><td></td></tr>";
                    echo "<tr><td>sandwich 1</td><td> ". $row["sandwich1"]. "</td><td></td></tr>";
                    echo "<tr><td>sandwich 2</td><td> ". $row["sandwich2"]. "</td><td></td></tr>";
                    echo "<tr><td>Total Price</td><td> ". $row["totalPrice"]. "</td><td></td></tr>"; 
                }
            } else {
                echo "0 results";
                } 
            $conn->close();      
        ?>
    </table><br><br>
        </body>
</html>

