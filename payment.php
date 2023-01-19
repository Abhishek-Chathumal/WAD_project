<?php
    include 'components/connect.php';

    session_start();
    
    if(isset($_SESSION['user_id'])){
       $user_id = $_SESSION['user_id'];
    }else{
       $user_id = '';
       header('location:user_login.php');
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <link rel="stylesheet" href="payment.css">
</head>
<body>

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" >
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="Checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>