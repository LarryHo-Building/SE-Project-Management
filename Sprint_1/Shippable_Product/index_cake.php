<?php
        require_once("4U_tools.php");
        top_module("Cake");
    ?>
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

  
        
</style>

    <head>
        <meta charset="utf-8">
        <title>4U Coffee</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
        <link type="text/css" rel="stylesheet" href="css/materialize.css" />
        <link type="text/css" rel="stylesheet" href="css/main.css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>

    </head>
	
	<body>
	        <nav>
            <div>
                <a href="index_coffee.php" class="brand-logo">4U Coffee</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse">
                    <i class="material-icons"><img src="img/Menu.png" class="image-Menu"/></i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li class="active">
                        <a href="index_coffee.php">HOME</a>
                    </li>
                    <li>
                        <a href="">Staff login</a>
                    </li>
                    
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li class="active">
                        <a href="index_coffee.php">HOME</a>
                    </li>
                    <li>
                        <a href="">Staff login</a>
                    </li>
                  
                    </li>
                </ul>
            </div>
        </nav>

        <img src="img/index-header.jpg" class="image-header-div" />
		
		<div align="center">
		<a href="index_coffee.php">
		   <button>coffee</button>
		</a>
		<a href="index_cake.php">
		   <button>cake</button>
		</a>
		<a href="index_sandswich.php">
		   <button>sandswich</button>
		</a>
		</div>
		
		<div class="box-wrap">
		<?php
		
		 foreach(file('4U.txt') as $line){
			 $array = explode(",", $line);
			 $Item_id=$array[0];
			 $Item_name=$array[1];
			 $Item_type=$array[2];
			 $base_price=$array[3];
			 $image_url=$array[4];
			
			 if ($Item_id!='Item_id' && $Item_type=='Cake'){
			echo '<div class="box">';
			echo'<img src="'.$image_url.'" class="image-pic1" />';
			echo '<label>'.$Item_name.'</label>';
			 echo '</div>';
			 }

			 
		
		 }
	    ?>	
		</div>
       
        
		


	
  <?php   
        require_once("4U_tools.php");
        end_module("");
    ?>