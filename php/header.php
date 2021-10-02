    <div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
        <div class="nav-side-menu">
            <div class="menu-list">
                <h6>Categories</h6>
                <ul id="menu-content" class="menu-content collapse out">
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#women" class="collapsed active">
                        <a href="shop.php?pg=1&cat=1">Women</a>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#men" class="collapsed">
                        <a href="shop.php?pg=1&cat=2">Men</a>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#children" class="collapsed">
                        <a href="shop.php?pg=1&cat=3">Watches</a>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#bags" class="collapsed">
                        <a href="shop.php?pg=1&cat=4">Bags &amp; Purses</a>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#footwear" class="collapsed">
                        <a href="shop.php?pg=1&cat=5">Shoes</a>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#eyewear" class="collapsed">
                        <a href="shop.php?pg=1&cat=6">Accessories</a>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#footwear" class="collapsed">
                        <a href="shop.php?pg=1&cat=7">Other</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="wrapper">
        <!-- ****** Header Area Start ****** -->
        <header class="header_area bg-img background-overlay-white"  style="background-image: url(img/bg-img/bg-3.jpg);">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart" id="cart">
                                        <?php
                                            $cart = $_SESSION["cart"];
                                            //$cart = array(array("image", "name, "qty", "price", "id"));
                                            $cart_total = $_SESSION["cart_total"];
                                        ?>
                                        <a href="#" id="header-cart-btn" onclick="cart_open();"><span class="cart_quantity"><?php echo count($cart);?></span> <i class="ti-bag"></i> Your Bag - LKR <?php echo $_SESSION["cart_total"];?></a>
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            <?php
                                                for($x=0; $x<count($cart); $x++){
                                            ?>
                                                <li>
                                                    <a href="product.php?id=<?php echo $cart[$x][4];?>" class="image"><img src="<?php echo "img/product-img/".$cart[$x][0];?>" class="cart-thumb" alt=""></a>
                                                    <div class="cart-item-desc">
                                                        <h6><a href="product.php?id=<?php echo $cart[$x][4];?>"><?php echo $cart[$x][1];?></a></h6>
                                                        <p><?php echo $cart[$x][2];?>x - <span class="price">LKR <?php echo $cart[$x][3];?></span></p>
                                                    </div>
                                                    <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                                </li>
                                            <?php
                                                }
                                            ?>
                                            <li class="total">
                                                <span class="pull-right">Total: LKR <?php echo $cart_total;?></span>
                                                <a href="cart.php" class="btn btn-sm btn-cart">Cart</a>
                                                <a href="checkout.php" class="btn btn-sm btn-checkout">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-right-side-menu ml-15">
                                        <a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Header Social Area -->
                            <div class="header-social-area">
                                <a href="#"><span class="karl-level">Share</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="karl-level">Sale</span>Shop</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="shop.php?pg=1&cat=1">Women</a>
                                                    <a class="dropdown-item" href="shop.php?pg=1&cat=2">Men</a>
                                                    <a class="dropdown-item" href="shop.php?pg=1&cat=3">Watches</a>
                                                    <a class="dropdown-item" href="shop.php?pg=1&cat=4">Bags & Purses</a>
                                                    <a class="dropdown-item" href="shop.php?pg=1&cat=5">Shoes</a>
                                                    <a class="dropdown-item" href="shop.php?pg=1&cat=6">Accessories</a>
                                                    <a class="dropdown-item" href="shop.php?pg=1&cat=7">Other</a>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
                                            <li class="nav-item"><a class="nav-link" href="aboutUs.php">About Us</a></li>
                                            <li class="nav-item"><a class="nav-link" href="contactUs.php">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Help Line -->
                            <div class="help-line">
                                <a href="tel:+346573556778"><i class="ti-headphone-alt"></i> +94 76 123 4567</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->

        <!-- ****** Top Discount Area Start ****** -->
        <section class="top-discount-area d-md-flex align-items-center">
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Free Shipping</h5>
                <h6><a href="#">Start Shopping</a></h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Discount for all dresses</h5>
                <h6>Start Shopping</h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Discount for footwear</h5>
                <h6>Start Shopping</h6>
            </div>
        </section>
        <!-- ****** Top Discount Area End ****** -->