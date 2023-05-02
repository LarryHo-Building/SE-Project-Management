<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>paymentchoose</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .title{
            font-family: "Apple Braille";
            font-size: 40px;
            text-align: center;
        }

        input{
            margin-left: 20px;
        }

        .card{
            width: 100%;
            height: 10%;
            margin-top: 10px;
            padding-top: 20px;
            padding-left: 20px;

        }

        .img{
            width: 10%;
            height: auto;
        }

        .text{
            font-family: "Apple Braille";
            font-size: 20px;
            padding-left: 20px;
        }

        .submit{
            width: 10%;
            height: auto;
            text-align: center;
            margin-top: 20px;
        }

        .submit,input{
            height: 20px;
        }
    </style>
</head>
<body>
<?php
<div class="title">Pay Method</div>
<input type="radio">
  <div class="card">
      <img class="img" src="../img/card-1673581_640.png">
      <div class="text">credit card</div>
  </div>
  <div>
      <input type="button" value="submit" onclick="location.href='cardpay.html'">
  </div>
</input>
<input type="radio">
<div class="card">
    <img class="img" src="../img/PayPal.png">
    <div class="text">Paypal</div>
</div>
<div>
    <input type="button" value="submit" onclick="location.href='https://www.paypal.com'">
</div>
</input>

?>
</body>
</html>