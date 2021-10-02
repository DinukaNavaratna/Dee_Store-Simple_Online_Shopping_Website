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
                    <div class="col-12">
                        <div class="cart-table clearfix">
                            <table class="table table-responsive" id="cart_body">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        //$cart = array(array("image", "name, "qty", "price", "id"))
                                        for($x=0; $x<count($cart_list); $x++){
                                    ?>
                                            <tr>
                                                <td class="cart_product_img d-flex align-items-center">
                                                    <a href="product.php?id=<?php echo $cart_list[$x][4]; ?>"><img src="img/product-img/<?php echo $cart_list[$x][0]; ?>" alt="Product"></a>
                                                    <h6><?php echo $cart_list[$x][1]; ?></h6>
                                                </td>
                                                <td class="price"><span>LKR <?php echo $cart_list[$x][3]; ?></span></td>
                                                <td class="qty">
                                                    <div class="quantity">
                                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty<?php echo $x; ?>'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                        <input type="number" class="qty-text" id="qty<?php echo $x; ?>" step="1" min="1" max="99" name="quantity" value="<?php echo $cart_list[$x][2]; ?>">
                                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty<?php echo $x; ?>'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                    </div>
                                                </td>
                                                <td class="total_price"><span>LKR <?php echo $cart_list[$x][2] * $cart_list[$x][3]; ?></span></td>
                                            </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-footer d-flex mt-30">
                            <div class="back-to-shop w-50">
                                <a href="index.php">Continue shooping</a>
                            </div>
                            <div class="update-checkout w-50 text-right">
                                <a href="#" onclick="cart_clear();">clear cart</a>
                                <a href="#" onclick="cart_update();">Update cart</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Cart total</h5>
                                <p>Final info</p>
                            </div>

                            <ul class="cart-total-chart" id="cart_total">
                                <li><span>Subtotal</span> <span>LKR <?php echo $cart_total; ?></span></li>
                                <li><span>Shipping</span> <span>Free</span></li>
                                <li><span><strong>Total</strong></span> <span><strong>LKR <?php echo $cart_total; ?></strong></span></li>
                            </ul>
                            <a href="checkout.php" class="btn karl-checkout-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Cart Area End ****** -->
<?php
 include_once 'php/footer.php';
?>