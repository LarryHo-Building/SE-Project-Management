<?php

session_start();



if (isset($_SESSION['role']))
{
 if ($_SESSION['role'] == 'staff'||$_SESSION['role'] == 'manager')
                    {
     
                        $navbarlogout = "logout.php";
                        $navbarwaitlist = "waitingList.php";
                            
                  
                        
                    } 
                    else
                    {
                         $navbarlogout = "login.php";
                        $navbarwaitlist = "waitingList1.php";
                        
                    }
   
    
}
                   


function top_module($page_title) {
     $html = <<<"HEADER"
<!DOCTYPE html>
<html lang='en'>

<head>
 <meta charset="utf-8">
<title>4U Coffee Shop | $page_title</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="../css/cart_css.css" />
</head>

<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">4U Coffee Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="index_page.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="waitingList1.php">Order Wait</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="shopping_cart_page.php">Shopping Cart</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                   
               
          </ul>
<form class="form-inline my-2 my-lg-0">
                <a class="btn btn-success btn-sm ml-3" href="cart.html">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">3</span>
                </a>
            </form>
        </div>
    </div>
</nav>

<img src="../media/index-header.jpg" class="image-header-div" />
           
    
HEADER;
    echo $html;
} 


function end_module(){
    $html = <<<"FOOTER"
   <br>
   <br>
  <footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>About</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Informations</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <h5>Others links</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i> My company</li>
                    <li><i class="fa fa-envelope mr-2"></i> email@example.com</li>
                    <li><i class="fa fa-phone mr-2"></i> + 33 12 14 15 16</li>
                    <li><i class="fa fa-print mr-2"></i> + 33 12 14 15 16</li>
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <a href="#">Back to top</a>
                </p>
                <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by <a href="https://t-php.fr/43-theme-ecommerce-bootstrap-4.html"><i>t-php</i></a> | <span>v. 1.0</span></p>
            </div>
        </div>
    </div>
</footer>
FOOTER;
    echo $html;

    
    
    
 echo "<aside id='debug'>";
    echo "<details close>";
    echo "<summary>Debug Show/Hide</summary>";
    echo "<pre>";
    echo "SESSION contains:";
    print_r($_SESSION); 

    echo "POST contains:";
    print_r($_POST); 
    echo "</pre>";
    echo "</details>";
    echo "</aside>";
    
}

