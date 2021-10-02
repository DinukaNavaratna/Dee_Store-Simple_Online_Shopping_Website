<?php
    include_once 'php/sessions.php';
    if(!isset($_SESSION['user'])){
        header("Location: login.php"); 
        exit();
    }
    include_once 'php/profile.php';
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
    <title>Dee Store | Profile</title>

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
                                <h5>Your Details</h5>
                            </div>

                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="first_name">Name</label>
                                        <input type="text" class="form-control" id="first_name" value="<?php echo $u_name; ?>" disabled>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="phone_number">Phone No</label>
                                        <input type="number" class="form-control" id="phone_number" min="0" value="<?php echo $u_num; ?>" disabled>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Email Address</label>
                                        <input type="email" class="form-control" id="email_address" value="<?php echo $u_email; ?>" disabled>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="street_address">Address</label>
                                        <input type="text" class="form-control mb-3" id="street_address" value="<?php echo $u_addr; ?>" disabled>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="postcode">Postcode</label>
                                        <input type="text" class="form-control" id="postcode" value="<?php echo $u_postcode; ?>" disabled>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="city">Town/City</label>
                                        <input type="text" class="form-control" id="city" value="<?php echo $u_city; ?>" disabled>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="state">Province</label>
                                        <input type="text" class="form-control" id="state" value="<?php echo $u_province; ?>" disabled>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="first_name">Country</label>
                                        <input type="text" class="form-control" id="first_name" value="<?php echo $u_country; ?>" disabled>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->                
<?php
 include_once 'php/footer.php';
?>