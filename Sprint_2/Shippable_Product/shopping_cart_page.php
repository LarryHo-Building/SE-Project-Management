<?php
        require_once("4U_tools.php");
        top_module("Shopping Cart");
    ?>

    
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">SHOPPING CART</h1>
     </div>
</section>


<body>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Base-Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        
                       
               
                        
                        <?php
                  
                        $counter = 1;
                        
    

		 foreach(file('shopping_cart.txt') as $line){
			 $array = explode(",", $line);
			 $Item_id=$array[0];
			 $Item_name=$array[1];
			 $Item_size=$array[2];
			 $Base_price=$array[3];
             
                           echo '<tr>  
                            <td>'.$Item_id.'</td>
                            <td>'.$Item_name.'</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1"/></td>
                            <td class="text-right">AUD '.$Base_price.'</td>
                        <td class="text-right"><button onclick="myFunction('.$Item_name.')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                            </tr>';
                    	
                    $counter++;
			
    }
                        
                        
               
  

                    
                        
                        ?>
                        
                                 <script>
function myFunction($Item_name) {
 $DELETE = $Item_id;

 $data = file("shoping_cart.txt");

 $out = array();

 foreach($data as $line) {
     if(trim($line) != $DELETE) {
         $out[] = $line;
     }
 }

 $fp = fopen("./foo.txt", "w+");
 flock($fp, LOCK_EX);
 foreach($out as $line) {
     fwrite($fp, $line);
 }
 flock($fp, LOCK_UN);
 fclose($fp);  
</script>
                        
                        
                      
                    </tbody>
                    
                    
                    
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
    
  <?php   
        require_once("4U_tools.php");
        end_module("");
    ?>
