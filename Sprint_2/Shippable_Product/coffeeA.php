<?php
        require_once("4U_tools.php");
        top_module("Coffee");
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
		<img src="img/coffee-a.jpg" class="image-pic1" /><br>
		<label style="font-size:2vw; color:black;font-weight:bold;">Coffee A</label>
		</div>
    
    <div class="size">
    <p style="font-size:1vw; color:black;font-weight:bold;">Cup size</p>
    <form>
  <div>
    <input type="radio" id="Choice1"
     name="size" value="small">
    <label class="a" for="Choice1">Small</label>

    <input type="radio" id="Choice2"
     name="size" value="medium">
    <label class="a" for="Choice2">Medium</label>

    <input type="radio" id="Choice3"
     name="size" value="large">
    <label class="a" for="Choice3">Large</label><br><br>
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
