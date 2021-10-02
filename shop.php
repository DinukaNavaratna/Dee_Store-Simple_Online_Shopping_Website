<?php
    include_once 'php/sessions.php';
    if(!isset($_GET['cat'])){
        header("Location: index.php"); 
        exit();
    }
    if(!isset($_GET['pg'])){
        $_GET['pg'] = 1;
    }
    include_once 'php/shop.php';
    if($_GET['cat'] == "search" && (!isset($_SESSION['keyword']) || !isset($_SESSION['image']))){
        $_GET['pg'] = 1;
        $_GET['cat'] = 1;
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
    <title>Dee Store | Shop</title>

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
        <section class="shop_grid_area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="shop_sidebar_area">
                           
                            <div class="widget catagory mb-50">
                                <!--  Side Nav  -->
                                <div class="nav-side-menu">
                                    <h6 class="mb-0">Search</h6>
                                    <div class="menu-list">
                                        <form method="POST" action="shop.php?pg=1&cat=search" enctype="multipart/form-data">
                                        <ul id="" class="">
                                            <li>
                                                <input id="search_keyword" type="text" name="keyword" value="<?php if(isset($_SESSION['keyword'])){echo $_SESSION['keyword'];}?>"></input>
                                            </li>
                                            <li>
                                                <br>
                                                <input type="file" accept="image/png, image/jpeg, image/jpg" onchange="clear_keyword();" name="image"></input>
                                            </li>
                                            <li>
                                                <br>
                                                <input type="hidden" value="true" name="first"></input>
                                                <button style="background-color: #f7c6b8; border: none; color: white; padding: 5px 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"
                                                onclick="search();">Search</button>
                                            </li>
                                        </ul>
                                        </form>
                                    </div>
                                    <br><br>
                                    <h6 class="mb-0">Catagories</h6>
                                    <div class="menu-list">
                                        <ul id="menu-content2" class="menu-content collapse out">
                                            <!-- Single Item -->
                                            <li class="<?php if($_GET['cat']==1){echo 'collaps';}else{echo 'collapsed';}?>">
                                                <a href="shop.php?pg=1&cat=1">Women</a>
                                            </li>
                                            <!-- Single Item -->
                                            <li class="<?php if($_GET['cat']==2){echo 'collaps';}else{echo 'collapsed';}?>">
                                                <a href="shop.php?pg=1&cat=2">Men</a>
                                            </li>
                                            <!-- Single Item -->
                                            <li class="<?php if($_GET['cat']==3){echo 'collaps';}else{echo 'collapsed';}?>">
                                                <a href="shop.php?pg=1&cat=3">Watches</a>
                                            </li>
                                            <!-- Single Item -->
                                            <li class="<?php if($_GET['cat']==4){echo 'collaps';}else{echo 'collapsed';}?>">
                                                <a href="shop.php?pg=1&cat=4">Bags &amp; Purses</a>
                                            </li>
                                            <!-- Single Item -->
                                            <li class="<?php if($_GET['cat']==5){echo 'collaps';}else{echo 'collapsed';}?>">
                                                <a href="shop.php?pg=1&cat=5">Shoes</a>
                                            </li>
                                            <!-- Single Item -->
                                            <li class="<?php if($_GET['cat']==6){echo 'collaps';}else{echo 'collapsed';}?>">
                                                <a href="shop.php?pg=1&cat=6">Accesories</a>
                                            </li>
                                            <!-- Single Item -->
                                            <li class="<?php if($_GET['cat']==7){echo 'collaps';}else{echo 'collapsed';}?>">
                                                <a href="shop.php?pg=1&cat=7">Other</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="shop_grid_product_area">
                            <div class="row">

                            <?php 
                                for($x=0; $x<count($shop_products); $x++){
                            ?>
                                <!-- Single gallery Item Start -->
                                <div class="col-12 col-sm-6 col-md-4 single_gallery_item wow fadeInUpBig" data-wow-delay="<?php echo '0.'.($x%3).'s';?>">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="<?php echo "img/product-img/".$shop_products[$x][0];?>" alt="">
                                        <div class="product-quicview">
                                            <a href="product.php?id=<?php echo $shop_products[$x][1];?>"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h4 class="product-price">LKR <?php echo $shop_products[$x][2];?></h4>
                                        <p><?php echo $shop_products[$x][3];?></p>
                                        <!-- Add to Cart -->
                                        <a href="#" class="add-to-cart-btn" onclick="add_to_cart('<?php echo $shop_products[$x][0]; ?>', '<?php echo $shop_products[$x][3]; ?>', 1, '<?php echo $shop_products[$x][2]; ?>', '<?php echo $shop_products[$x][1];?>');">ADD TO CART</a>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                                
                            </div>
                        </div>

                        <div class="shop_pagination_area wow fadeInUp" data-wow-delay="0.5s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <?php
                                        for($x=1; $x<=$page_count; $x++){
                                            if($x==$_GET['pg']){
                                    ?>
                                                <li class="page-item active"><a class="page-link" href="#"><?php echo $x; ?></a></li>
                                    <?php
                                            } else {
                                    ?>
                                                <li class="page-item"><a class="page-link" href="shop.php?pg=<?php echo $x; ?>&cat=<?php echo $_GET['cat']; ?>"><?php echo $x; ?></a></li>
                                    <?php
                                            }
                                        }
                                    ?>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </section>                
<?php
 include_once 'php/footer.php';
?>