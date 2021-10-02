<?php
    include_once 'php/sessions.php';
    include_once 'php/product.php';
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
    <title>Dee Store | Product Details</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="bot/css/chat.css">

</head>

<body>
    <?php include_once 'php/header.php'; ?>

        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
        <div class="breadcumb_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="#">Shop</a></li>
                            <li class="breadcrumb-item"><a href="#"><?php echo $product_cat; ?></a></li>
                            <li class="breadcrumb-item active"><?php echo $product_name; ?></li>
                        </ol>
                        <!-- btn -->
                        <a href="shop.php?pg=1&cat=<?php echo $product_cat_no; ?>" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Back to Category</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->

        <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
        <section class="single_product_details_area section_padding_0_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <?php
                                        for($x=0; $x<count($product_imgs); $x++){
                                            if($x==0){
                                    ?>
                                                <li class="active" data-target="#product_details_slider" data-slide-to="<?php echo $x; ?>" style="background-image: url(<?php echo 'img/product-img/'.$product_imgs[$x]; ?>);"></li>
                                    <?php
                                            } else {
                                    ?>
                                                <li data-target="#product_details_slider" data-slide-to="<?php echo $x; ?>" style="background-image: url(<?php echo 'img/product-img/'.$product_imgs[$x]; ?>);"></li>
                                    <?php
                                            }
                                        }
                                    ?>
                                </ol>

                                <div class="carousel-inner">
                                    <?php
                                        for($x=0; $x<count($product_imgs); $x++){
                                            if($x==0){
                                    ?>
                                                <div class="carousel-item active">
                                                    <a class="gallery_img" href="<?php echo 'img/product-img/'.$product_imgs[$x]; ?>">
                                                        <img class="d-block w-100" src="<?php echo 'img/product-img/'.$product_imgs[$x]; ?>" alt="<?php echo $product_imgs[$x]; ?>">
                                                    </a>
                                                </div>
                                    <?php
                                            } else {
                                    ?>
                                                <div class="carousel-item">
                                                    <a class="gallery_img" href="<?php echo 'img/product-img/'.$product_imgs[$x]; ?>">
                                                        <img class="d-block w-100" src="<?php echo 'img/product-img/'.$product_imgs[$x]; ?>" alt="<?php echo $product_imgs[$x]; ?>">
                                                    </a>
                                                </div>
                                    <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single_product_desc">

                            <h4 class="title"><a href="#"><?php echo $product_name; ?></a></h4>

                            <h4 class="price">LKR <?php echo $product_price; ?></h4>

                            <p class="available">Available: <span class="text-muted"><?php echo $product_availability; ?></span></p>

                            <div class="single_product_ratings mb-15">
                                <?php
                                    for($x=0; $x<5; $x++){
                                        if($x<$product_rank){
                                ?>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                <?php
                                        } else {
                                ?> 
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                <?php
                                        }
                                    }
                                ?>
                            </div>

                            <!-- Add to Cart Form -->
                            <form class="cart clearfix mb-50 d-flex" method="post">
                                <div class="quantity">
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <button type="button" name="addtocart" value="5" class="btn cart-submit d-block" onclick="add_to_cart('<?php echo $product_imgs[0]; ?>', '<?php echo $product_name; ?>', document.getElementById('qty').value, '<?php echo $product_price; ?>', '<?php echo $product_id; ?>');">Add to cart</button>
                            </form>

                            <div id="accordion" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h6 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Description</a>
                                        </h6>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p><?php echo $product_info; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">shipping &amp; Returns</a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p><?php echo $product_shipping; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->

        <section class="you_may_like_area clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="you_make_like_slider owl-carousel">
                            
                            <?php
                                for($x=0; $x<count($similar_products); $x++){
                            ?>
                                    <!-- Single gallery Item -->
                                    <div class="single_gallery_item">
                                        <!-- Product Image -->
                                        <div class="product-img">
                                            <img src="img/product-img/<?php echo $similar_products[$x][0]; ?>" alt="">
                                            <div class="product-quicview">
                                                <a href="product.php?id=<?php echo $similar_products[$x][1]; ?>"><i class="ti-plus"></i></a>
                                            </div>
                                        </div>
                                        <!-- Product Description -->
                                        <div class="product-description">
                                            <h4 class="product-price">LKR <?php echo $similar_products[$x][2]; ?></h4>
                                            <p><?php echo $similar_products[$x][3]; ?></p>
                                            <!-- Add to Cart -->
                                            <a href="#" class="add-to-cart-btn" onclick="add_to_cart('<?php echo $similar_products[$x][0]; ?>', '<?php echo $similar_products[$x][3]; ?>', 1, '<?php echo $similar_products[$x][2]; ?>', '<?php echo $similar_products[$x][1]; ?>');">ADD TO CART</a>
                                        </div>
                                    </div>
                            <?php
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
 include_once 'php/footer.php';
?>