<?php
    include_once 'php/sessions.php';
    if(!isset($_SESSION['admin'])){
        header("Location: login.php"); 
        exit();
    }
    if(isset($_GET['update'])){     
        require_once 'php/db_con.php';
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $p_id = (int) $_GET['update'];
            $sql = "SELECT name,category,price,qty,rank,img,description,shipping FROM `products` WHERE id=$p_id;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            // set the resulting array to associative
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $name = $result[0]['name'];
            $cat = $result[0]['category'];
            $price = $result[0]['price'];
            $qty = $result[0]['qty'];
            $rank = $result[0]['rank'];
            $img = $result[0]['img'];
            $des = $result[0]['description'];
            $ship = $result[0]['shipping'];
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    } else {
        $name = "";
        $cat = "";
        $price = "";
        $qty = "";
        $rank = "0";
        $img = "";
        $des = "";
        $ship = "";
    }
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
                        <h1 class="page-head-line">Add Products</h1>
                        <h1 class="page-subhead-line">This is Product Add Form  </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           PRODUCT FORM
                        </div>
                        <div class="panel-body">
                            <form role="form" action="php/functions.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Product name *</label>
                                            <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Category *</label>
                                            <select class="form-control" name="cat">
                                                <option value="1" <?php if($cat == "1"){echo "Selected";} ?>>Women</option>
                                                <option value="2" <?php if($cat == "2"){echo "Selected";} ?>>Men</option>
                                                <option value="3" <?php if($cat == "3"){echo "Selected";} ?>>Watches</option>
                                                <option value="4" <?php if($cat == "4"){echo "Selected";} ?>>Bags & Purses</option>
                                                <option value="5" <?php if($cat == "5"){echo "Selected";} ?>>Shoes</option>
                                                <option value="6" <?php if($cat == "6"){echo "Selected";} ?>>Accessories</option>
                                                <option value="7" <?php if($cat == "7"){echo "Selected";} ?>>Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Price *</label>
                                            <input class="form-control" type="number" name="price" value="<?php echo $price; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Qty *</label>
                                            <input class="form-control" type="number" name="qty" value="<?php echo $qty; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Rank *</label>
                                            <input class="form-control" type="number" name="rank" min="0" max="5" value="<?php echo $rank; ?>" required>
                                            <p class="help-block">0 - 5</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Description *</label>
                                            <input class="form-control" type="text" name="des" value="<?php echo $des; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Shipping policy *</label>
                                            <input class="form-control" type="text" name="ship" value="<?php echo $ship; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Main Image *</label>
                                            <input class="form-control" type="file" accept="image/*" name="img1" id="img1" <?php if(!isset($_GET['update'])){echo "required";}; ?>)>
                                            <p class="help-block">Thumbnail image.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Image 1</label>
                                            <input class="form-control" type="file" accept="image/*" name="img2">
                                        </div>
                                        <div class="form-group">
                                            <label>Image 2</label>
                                            <input class="form-control" type="file" accept="image/*" name="img3">
                                        </div>
                                        <div class="form-group">
                                            <label>Image 3</label>
                                            <input class="form-control" type="file" accept="image/*" name="img4">
                                        </div>
                                        <div class="form-group">
                                            <label>Image 4</label>
                                            <input class="form-control" type="file" accept="image/*" name="img5">
                                        </div>
                                        <?php if(!isset($_GET['update'])){
                                        ?>
                                            <input type="hidden" value="add_product" name="func" id="func"/>
                                        <?php
                                        } else {
                                        ?>
                                            <input type="hidden" value="update_product" name="func" id="func"/>
                                            <input type="hidden" value="<?php echo $_GET['update'];?>" name="update" id="func"/>
                                        <?php
                                        }
                                        ?>
                                        <button type="submit" class="btn btn-info">Add Product</button>

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>
             <!--/.ROW-->
             

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2021 YourCompany | Design By : <a href="" target="_blank">Blush Boutique.lk</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    <script src="js/functions.js"></script>


</body>
</html>
