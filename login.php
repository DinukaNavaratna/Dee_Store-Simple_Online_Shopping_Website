<?php
    include_once 'php/sessions.php';
    $cart_list = $_SESSION["cart"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Dee Store | Cart</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="bot/css/chat.css">

</head>

<body>
    <?php include_once 'php/header.php'; ?>
    
        <!-- ****** Cart Area Start ****** -->
        <div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Login</h5>
                            </div>

                            <ul class="cart-total-chart" id="cart_total">
                                <div class="col-md-12 mb-3">
                                    <label for="first_name">Email <span>*</span></label>
                                    <input type="email" class="form-control" id="email" value="" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="last_name">Password <span>*</span></label>
                                    <input type="password" class="form-control" id="psw" value="" required>
                                </div>
                            </ul>
                            <a href="#" class="btn karl-checkout-btn" onclick="login();">Login</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Cart Area End ****** -->
<?php
 include_once 'php/footer.php';
?>