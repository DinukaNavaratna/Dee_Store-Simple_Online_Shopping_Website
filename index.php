<?php
    include_once 'php/sessions.php';
    include_once 'php/home.php';
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
    <title>Dee Store | Home</title>

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
        <!-- ****** Welcome Slides Area Start ****** -->
        <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Free shipping for a limited period</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Fashion Trends</h2>
                                    <a href="shop.php?pg=1&cat=2" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-4.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Free shipping for a limited period</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Summer Collection</h2>
                                    <a href="shop.php?pg=1&cat=5" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-6.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Free shipping for a limited period</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Autumn Collection</h2>
                                    <a href="shop.php?pg=1&cat=7" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Free shipping for a limited period</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Women Fashion</h2>
                                    <a href="shop.php?pg=1&cat=1" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** Welcome Slides Area End ****** -->

        <!-- ****** Top Catagory Area Start ****** -->
        <section class="top_catagory_area d-md-flex clearfix">
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                <div class="catagory-content">
                    <h6>On Accesories</h6>
                    <h2>Sale 30%</h2>
                    <a href="shop.php?pg=1&cat=6" class="btn karl-btn">SHOP NOW</a>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
                <div class="catagory-content">
                    <h6>in Bags excepting the new collection</h6>
                    <h2>Designer bags</h2>
                    <a href="shop.php?pg=1&cat=4" class="btn karl-btn">SHOP NOW</a>
                </div>
            </div>
        </section>
        <!-- ****** Top Catagory Area End ****** -->

        <!-- ****** New Arrivals Area Start ****** -->
        <section class="new_arrivals_area section_padding_100_0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>New Arrivals</h2><br>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="karl-projects-menu mb-100">
                <div class="text-center portfolio-menu">
                    <button class="btn active" data-filter="*">ALL</button>
                    <button class="btn" data-filter=".cat1">WOMEN</button>
                    <button class="btn" data-filter=".cat2">MEN</button>
                    <button class="btn" data-filter=".cat3">WATCHES</button>
                    <button class="btn" data-filter=".cat4">BAGS & PURSES</button>
                    <button class="btn" data-filter=".cat5">SHOES</button>
                    <button class="btn" data-filter=".cat6">ACCESSORIES</button>
                    <button class="btn" data-filter=".cat7">OTHER</button>
                </div>
            </div>

            <div class="container">
                <div class="row karl-new-arrivals">

                    <?php 
                        for($x=0; $x<count($home_products); $x++){
                    ?>
                        <!-- Single gallery Item Start -->
                        <div class="col-12 col-sm-6 col-md-4 single_gallery_item <?php echo $home_products[$x][0];?> wow fadeInUpBig" data-wow-delay="<?php echo '0.'.($x%3).'s';?>">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="<?php echo "img/product-img/".$home_products[$x][1];?>" alt="">
                                <div class="product-quicview">
                                    <a href="product.php?id=<?php echo $home_products[$x][2];?>"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <h4 class="product-price">LKR <?php echo $home_products[$x][3];?></h4>
                                <p><?php echo $home_products[$x][4];?></p>
                                <!-- Add to Cart -->
                                <a href="#" class="add-to-cart-btn" onclick="add_to_cart('<?php echo $home_products[$x][1]; ?>', '<?php echo $home_products[$x][4]; ?>', 1, '<?php echo $home_products[$x][3]; ?>', '<?php echo $home_products[$x][2];?>');">ADD TO CART</a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                   
                </div>
            </div>
        </section>
        <!-- ****** New Arrivals Area End ****** -->

        <!-- ****** Offer Area Start ****** -->
        <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(img/bg-img/bg-5.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end justify-content-end">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                            <h2>Men & Women Trend Wears <span class="karl-level">Hot</span></h2>
                            <p>* Free shipping until 25 Dec 2021</p>
                            <div class="offer-product-price">
                                <h3><span class="regular-price">$25.90</span> $15.90</h3>
                            </div>
                            <a href="shop.php?pg=1&cat=3" class="btn karl-btn mt-30">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ****** Offer Area End ****** -->

        <!-- ****** Popular Brands Area Start ****** -->
        <section class="karl-testimonials-area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>Testimonials</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="karl-testimonials-slides owl-carousel">

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>I love the products that I ordered from this store. It has a amazing women dress collection and I'm addict to your store!</h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/test01.jpeg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Thavi Fernando</p>
                                        <span>Client, Sri Lanka</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>I completely love this site.And it has the most efficient and elegant designs with many new fashion styles .Completely love this website!</h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/test03.jpeg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Swetha Melly</p>
                                        <span>Client, Sri Lanka</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>I can't even express how excited I was when I saw this product it hase really good product and highly recomanded your store and your customer care is really good. Thank You!</h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/test02.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Ginny Silva</p>
                                        <span>Client, Sri Lanka</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ****** Popular Brands Area End ****** -->

<?php
 include_once 'php/footer.php';
?>