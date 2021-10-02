<?php
    include_once 'php/sessions.php';
    if(!isset($_SESSION['admin'])){
        header("Location: login.php"); 
        exit();
    }
    include_once 'php/orders.php';
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
                        <h1 class="page-head-line">Orders</h1><button style="float:right;" onclick="load_orders('<?php echo $status1;?>');">Show <?php echo $status1;?></button>
                        <h1 class="page-subhead-line"><?php echo $order_count.' '.$status;?> Orders...</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                    <?php 
                        for($x=0; $x<count($orders); $x++){
                    ?>
                        <!--   Kitchen Sink -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Order ID: <?php echo $orders[$x][0] ;?>
                                <?php if($status == "Pending"){?>
                                <button style="float:right;" onclick="complete_order(<?php echo $orders[$x][0] ;?>);">Complete</button>
                                <?php } ?>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <td>Name</td>
                                                    <td><?php echo $orders[$x][1] ;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <td><?php echo $orders[$x][2] ;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td><?php echo $orders[$x][3] ;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><?php echo $orders[$x][4] ;?></td>
                                                </tr>
                                                <tr>
                                                    <td>City</td>
                                                    <td><?php echo $orders[$x][5] ;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Province</td>
                                                    <td><?php echo $orders[$x][6] ;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Postcode</td>
                                                    <td><?php echo $orders[$x][7] ;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Country</td>
                                                    <td><?php echo $orders[$x][8] ;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Total</td>
                                                    <td>LKR <?php echo $orders[$x][9] ;?>.00/=</td>
                                                </tr>
                                                <tr>
                                                    <td>Timestamp</td>
                                                    <td><?php echo $orders[$x][10] ;?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product ID</th>
                                                    <th>Product Name</th>
                                                    <th>Qty</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $items = $orders[$x][11];
                                                    for($y=0; $y<count($items); $y++){
                                                ?>
                                                    <tr>
                                                        <td><?php echo $y ;?></td>
                                                        <td><?php echo $items[$y][0] ;?></td>
                                                        <td><?php echo $items[$y][1] ;?></td>
                                                        <td><?php echo $items[$y][2] ;?></td>
                                                    </tr>
                                                <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- End  Kitchen Sink -->
                    <?php
                        }
                    ?>
                </div>
            </div>
                <!-- /. ROW  -->
            </div>
                <!-- /. ROW  -->

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
     <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/functions.js"></script>


</body>
</html>
