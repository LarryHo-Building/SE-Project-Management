<?php
        require_once("4U_tools.php");
        top_module("Sandwich");
    ?>

<style type="text/css">
.box {
    text-align: center;
     float: left;
             width: 25%;
			 
                 box-sizing: border-box;
                 padding: 10px;
                 min-width: 150px;
    
}

.box-wrap>div {
    width: 23%;
   
    margin: 1%;
    border-radius: 10%;
    float: left;
	
   
}
label{
    font-size:1vw !important; 
    color:black !important;
    font-weight:bold !important;
    color:black !important;
}

  
        
</style>

    
	
	<body>
	        
        <img src="img/index-header.jpg" class="image-header-div" />
		
		<div align="center">
		<a href="index.php">
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
             $image_linkTo=$array[5];
			
			 if ($Item_id!='Item_id' && $Item_type=='Sandswich'){
			echo '<div class="box">';
			echo'<a href='.$image_linkTo.'><img src="'.$image_url.'" class="image-pic1" />';
			echo '<label>'.$Item_name.'</label></a>';
			 echo '</div>';
			 }

			 
		
		 }
	    ?>	
		</div>
       
        
		


	</body>
 <?php   
        require_once("4U_tools.php");
        end_module("");
    ?>
