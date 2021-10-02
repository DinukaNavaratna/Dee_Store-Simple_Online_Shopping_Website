<?php
    include_once 'php/sessions.php';
    if(!isset($_SESSION['admin'])){
        header("Location: login.php"); 
        exit();
    }
    $home_products = array ();
    require_once 'php/db_con.php';
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT id,name,category,img FROM `products`;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // set the resulting array to associative
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($results as $result) {
            array_push($home_products, array($result['id'], $result['name'], 'cat'.$result['category'], $result['img']));
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>
<!DOCTYPE html>
<html xmlns="">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES -->
    <link href="css/prettyPhoto.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <?php include_once 'php/navbar.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Gallery Example</h1>
                        <h1 class="page-subhead-line">Welcome to clothing Store Gallery..</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div id="port-folio">
                      <div class="row" >
                          <!--
                          <ul id="filters" >
						<li><span class="filter" data-filter="cat1 cat2 cat3 cat4 cat5 cat6cat7">All</span></li>
						<li><span class="filter active">/</span></li>
						<li><span class="filter" data-filter="cat1">Women</span></li>
						<li><span class="filter">/</span></li>
						<li><span class="filter" data-filter="cat2">Men</span></li>
						<li><span class="filter">/</span></li>
						<li><span class="filter" data-filter="cat3">Shildren</span></li>
						<li><span class="filter">/</span></li>
						<li><span class="filter" data-filter="cat4">BAGS & PURSES</span></li>
						<li><span class="filter">/</span></li>
						<li><span class="filter" data-filter="cat5">Footwear</span></li>
						<li><span class="filter">/</span></li>
						<li><span class="filter" data-filter="cat6">ACCESSORIES</span></li>
						<li><span class="filter">/</span></li>
						<li><span class="filter" data-filter="cat7">Other</span></li>
					</ul>
                    -->
                <?php 
                    for($x=0; $x<count($home_products); $x++){
                ?>
                    <div class="col-md-4 ">
                        <div class="portfolio-item <?php echo $home_products[$x][2];?> mix_all" data-cat="<?php echo $home_products[$x][2];?>" >
                            <img src="../img/product-img/<?php echo $home_products[$x][3];?>" class="img-responsive " alt="" />
                            <div class="overlay">
                                <p> 
                                    Product ID: <?php echo $home_products[$x][0];?><br>                               
                                    <?php echo $home_products[$x][1];?>
                                </p>
                                <a class="btn btn-info " title="Update" href="form.php?update=<?php echo $home_products[$x][0];?>"><i class="fa fa-plus fa-2x"></i></a>
                                <a class="btn btn-info " title="Delete" href="#" onclick="deletep(<?php echo $home_products[$x][0];?>);"><i class="fa fa-trash fa-2x"></i></a>

                            </div>
                        </div>
                    </div> 
                <?php
                    }
                ?>

            </div>
                </div>
               

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2020 YourCompany | Design By : <a href="" target="_blank">Blush Boutique.lk</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
     <!-- PAGE LEVEL SCRIPTS -->
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
     <!-- CUSTOM Gallery Call SCRIPTS -->
    <script src="js/galleryCustom.js"></script>
    <script src="js/functions.js"></script>
</body>
</html>
