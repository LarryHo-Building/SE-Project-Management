<?php
session_start();

function top_module($pageTitle,$headerImage,$index,$rates,$accommodation,$contact) {
    $html = <<<"HEADER"
        <!DOCTYPE html>
<html lang='en'>

    <head>
        <meta charset="utf-8">
        <title>DeepCamp - $pageTitle</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
        <link type="text/css" rel="stylesheet" href="../css/materialize.css" />
        <link type="text/css" rel="stylesheet" href="../css/main.css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/contact.js"></script>
    </head>

    <body>
        <nav>
            <div>
                <a href="index.html" class="brand-logo">DeepCamp</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse">
               
                    <i class="material-icons"><img src="../media/Menu.png" class="image-Menu"/></i>
                
                </a>
                <ul class="right hide-on-med-and-down">
                    <li class="$index">
                        <a href="index.php">HOME</a>
                    </li>
                    <li class="$rates">
                        <a href="rates.php">RATES</a>
                    </li>
                    <li class="$accommodation">
                        <a href="accommodation.php">ACCOMMODATION</a>
                    </li>
                    <li class="$contact">
                        <a href="contact.php">CONTACT</a>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li class="$index">
                        <a href="index.php">HOME</a>
                    </li>
                    <li class="$rates">
                        <a href="rates.php">RATES</a>
                    </li>
                    <li class="$accommodation">
                        <a href="accommodation.php">ACCOMMODATION</a>
                    </li>
                    <li class="$contact">
                        <a href="contact.php">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>

        <img src="../media/$headerImage.jpg" class="image-header-div" />

        <br>
        <br>
HEADER;
    echo $html;
}

function end_module(){
    $html = <<<"FOOTER"
   <br>
   <br>
                <div class="divider"></div>
                <br>
                <footer style="text-align: center">
                    <div>&copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Jingbin Yin s3549994 Cheng Long Liew s3517028 group27</div>
                    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming
                        course at RMIT University in Melbourne, Australia.</div>
                    <div>Maintain links to your working
                        <a href='../style-guide.php'>style guide</a>, your
                        <a href='../products.txt'>products spreadsheet</a> and
                        <a href='../orders.txt'>orders spreadsheet</a> here.</div>
                </footer>
                <script> $(".button-collapse").sideNav();</script>


                <br>


                </body>

            </html>
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

