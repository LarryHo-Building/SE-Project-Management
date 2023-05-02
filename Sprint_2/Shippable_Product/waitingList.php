<?php
        require_once("4U_tools.php");
        top_module("Shopping Cart");
    ?>

<style>
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
</style>
   
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



        <h1 style="text-align:center;">Waiting List</h1>
        <table id="asd">
        <tr>
        <th>Position in Queue</th>
        <th>Order Id </th>
        <th>Status</th>
        <th>Complete Order</th>
        <th>Finish Order</th>
        </tr>
        <?php
            include_once('config.php');
            $sqlget="SELECT * FROM ordersTable";
            $result=$conn->query($sqlget);
            if ($result->num_rows > 0) {
            // output data of each row
            $num=1;
            while($row = $result->fetch_assoc()) {
               
                $id=$row["orderid"];
                echo "<tr>";
                echo "<td>". $num ."</td>";
                echo "<td><a href=item.php?orderid=".$row["orderid"].">" . $id. "</a></td>"; 
                echo "<td> ". $row["status"]. "</td>";
                if($row["status"]!='ready to pick up')
                {
                    echo "<td><button><a href=complete.php?orderid=".$row["orderid"].">Finish cocking</a></button></td>";
                }
                else{
                    echo "<td></td>";
                }
                if($row["status"]=='ready to pick up')
                {
                echo "<td><button><a href=delete.php?orderid=".$row['orderid'].">Complete Order</a></button></td>";
                }
                else{
                    echo "<td></td>";
                }
                echo "</tr>";                
                $num++;
            }
            } else {
            echo "0 results";
            } 
            $conn->close();      
        ?>
    </table><br><br>
        </body>
  <?php   
        require_once("4U_tools.php");
        end_module("");
    ?>
