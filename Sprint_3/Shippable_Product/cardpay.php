?php
        require_once("4U_tools.php");
        top_module("Payment");
    ?>
    <style>
        *{
            padding:0px;
            margin: 0px;
        }

        .paybox {
            height: 50%;
            width: 50%;
            border: black solid 1px;
            position:absolute;
            top: 25%;
            left:25%;
            text-align: center;
        }
        hr{
            height: 1px;
            display: block;
            color: #000;
            width: 80%;
            margin-left: 10%;
        }

        .title{
            font-family: "Apple Braille";
            font-size: 40px;
            text-align: center;
        }

        .cardno{
            margin-top: 10px;
            font-size: 30px;
            font-family: "Apple Braille";
        }

        .cardno input{
            height: 40px;
        }
        .expirydate input{
            margin-top: 20px;
            height: 40px;

        }
        .ccv input{
            margin-top: 20px;
            height: 40px;
        }

        #submit{
            margin-top: 40px;
            font-size: 60px;
        }
    </style>

<body>
    <?php
     <div class="paybox">
         <div class="title">Pay by Credit Card</div>
         <hr><hr/>
         <div class="cardno">
             CardNo.
             <input type="text" maxlength="4" onkeyup=value=value.replace(/[^\d]/g,'')>
             <input type="text" maxlength="4" onkeyup=value=value.replace(/[^\d]/g,'')>
             <input type="text" maxlength="4" onkeyup=value=value.replace(/[^\d]/g,'')>
             <input type="text" maxlength="4" onkeyup=value=value.replace(/[^\d]/g,'')>
         </div>
         <div class="expirydate">
             Expiry Date
             <input type="text" maxlength="2" onkeyup=value=value.replace(/[^\d]/g,'')>
             /
             <input type="text" maxlength="2" onkeyup=value=value.replace(/[^\d]/g,'')>
         </div>
         <div class="ccv">
             CCV
             <input type="text" maxlength="3" onkeyup=value=value.replace(/[^\d]/g,'')>
         </div>
         <div>
             <input id="submit" type="submit">
         </div>
     </div>


?>

</body>
      require_once("4U_tools.php");
        end_module("");
    ?>
