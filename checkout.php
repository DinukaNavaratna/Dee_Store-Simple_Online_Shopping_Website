<?php
    include_once 'php/sessions.php';
    if(isset($_SESSION['user'])){
        include_once 'php/profile.php';
    } else {
        $f_name = "";
        $l_name = "";
        $u_num = "";
        $u_email = "";
        $u_addr = "";
        $u_postcode = "";
        $u_city = "";
        $u_province = "";
        $u_country = "";
    }
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
    <title>Dee Store | Checkout</title>

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
    
        <!-- ****** Checkout Area Start ****** -->
        <div class="checkout_area section_padding_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-page-heading">
                                <h5>Billing Address</h5>
                            </div>

                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="first_name">First Name <span>*</span></label>
                                        <input type="text" class="form-control" id="first_name" value="<?php echo $f_name; ?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="last_name">Last Name <span>*</span></label>
                                        <input type="text" class="form-control" id="last_name" value="<?php echo $l_name; ?>" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="country">Country <span>*</span></label>
                                        <select class="custom-select d-block w-100" id="country">
                                        <option value="Sri Lanka">Sri Lanka</option>
                                    </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="street_address">Address <span>*</span></label>
                                        <input type="text" class="form-control mb-3" id="street_address" value="<?php echo $u_addr; ?>" required>
                                        <input type="text" class="form-control" id="street_address2" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="postcode">Postcode <span>*</span></label>
                                        <input type="text" class="form-control" id="postcode" value="<?php echo $u_postcode; ?>">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="city">Town/City <span>*</span></label>
                                        <input type="text" class="form-control" id="city" value="<?php echo $u_city; ?>">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="state">Province <span>*</span></label>
                                        <input type="text" class="form-control" id="state" value="<?php echo $u_province; ?>">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="phone_number">Phone No <span>*</span></label>
                                        <input type="number" class="form-control" id="phone_number" min="0" value="<?php echo $u_num; ?>" required>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Email Address <span>*</span></label>
                                        <input type="email" class="form-control" id="email_address" value="<?php echo $u_email; ?>" required>
                                    </div>

                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox d-block mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1">Terms and conitions</label>
                                        </div>
                                        <?php 
                                            if(!isset($_SESSION['user'])){
                                                echo '<div class="custom-control custom-checkbox d-block mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                                    <label class="custom-control-label" for="customCheck2">Create an accout</label>
                                                </div>';
                                            }
                                        ?>
                                        <div class="custom-control custom-checkbox d-block">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3" checked>
                                            <label class="custom-control-label" for="customCheck3">Subscribe to our newsletter</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                        <div class="order-details-confirmation">

                            <div class="cart-page-heading">
                                <h5>Your Order</h5>
                            </div>

                            <ul class="order-details-form mb-4">
                                <li><span>Subtotal</span> <span>LKR <?php echo $cart_total; ?></span></li>
                                <li><span>Shipping</span> <span>Free</span></li>
                                <li><span>Total</span> <span>LKR <?php echo $cart_total; ?></span></li>
                            </ul>
                            <br> <br>
                            <a href="#" class="btn karl-checkout-btn" onclick="place_order();">Place Order</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->
<?php
 include_once 'php/footer.php';
?>