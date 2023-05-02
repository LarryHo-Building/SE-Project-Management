<?php
        require_once("4U_tools.php");
        top_module("Shopping Cart");
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
div.size{
  border: 1px solid black;
  margin-top: 10px;
  margin-bottom: 30px;
  margin-left:  675px;
  margin-right: 675px;
  text-align:center;
  padding-bottom:30px;
}
input[type=text]{
    width: 5% !important;
    border: 1px solid #000000!important;
    padding-left:10px !important;
    height: 87% !important;
}
label.a{
    font-size:0.8vw !important; 
    color:black !important;
    font-weight:bold !important;
}

  
        
</style>

	<body>
	       
        <img src="img/index-header.jpg" class="image-header-div" />
        
        
        <div class="box" align="center">
		<img src="img/Sandwich-B.jfif" class="image-pic1" /><br>
		<label style="font-size:2vw; color:black;font-weight:bold;">Sandwich B</label>
		</div>
    
    <div class="size">
    <form>
  <div>
  <br><br>
    <label class="a">Quantity:</label> 
    <input class="text1" type="text" name="Quantity" size="4" width=1%>
    <br>
    <button type="submit">Submit</button><br>
  </div>

</form>

</div>    
        </body>

<?php   
        require_once("4U_tools.php");
        end_module("");
    ?>
