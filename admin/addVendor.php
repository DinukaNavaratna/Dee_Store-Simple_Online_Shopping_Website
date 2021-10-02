<?php
   include_once 'php/sessions.php';
    if(!isset($_SESSION['admin'])){
        header("Location: login.php"); 
        exit();
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
    <!-- PAGE LEVEL STYLES -->
    <link href="/css/bootstrap-fileupload.min.css" rel="stylesheet" />
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
                        <h1 class="page-head-line">Add Vendor Details</h1>
                        <h1 class="page-subhead-line">WELCOME TO CLOTHING STORE... </h1>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10  ">

                       <div class="panel panel-info">
                        <div class="panel-heading">
                           Add Vendors
                        </div>
                        
                        <div class="panel-body">
                        <form role="form" action="php/addVendorPHP.php" method="POST" enctype="multipart/form-data">
                   
                    <div class="form-group">

                      <label>Enter First Name</label>
                         <input class="form-control" type="text" placeholder="Your Name.." name="ven_fname"><br>
                          
                       <label>Enter Last Name</label>
                         <input class="form-control" type="text" placeholder="Your Name" name="ven_lname"><br>
                          
                           <label>Enter Email </label>
                         <input class="form-control" type="email" name="ven_email" placeholder=" Email Here"><br>

                         <label>Enter Phone </label>
                         <input class="form-control" type="phone" name="ven_phone" placeholder="(+94)-77 3126545"><br>

                         <div class="form-group" >
                                            <label>Select Vendor Catogory</label>
                                            <select  name="ven_type" class="form-control">
                                                <option>Women dress</option>
                                                <option>Men denim </option>
                                                <option>Shoes </option>
                                                <option>accessories</option>
                                                <option>Women denim</option>
                                                <option>Men shirts</option>
                                                <option>Office wear</option>
                                                <option>bags and purses</option>
                                                
                                            </select>
                                        </div>
                                        <hr>
                                        <label>Enter Descriptions </label>
                         <input class="form-control" type="text" name="item_details" placeholder=" Product Details"><br> 
                         <label>Enter Color</label>
                         <input class="form-control" type="text" name="item_color" placeholder=" Product Color"><br> 

                          <div class="form-group">
                                            <label>Size</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="item_size" id="optionsRadios1" value="XS" checked="">XS
                                                </label>
                                                <label>
                                                    <input type="radio" name="item_size" id="optionsRadios1" value="S" checked="">S
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="item_size" id="optionsRadios2"  value="M">M
                                                </label>
                                                <label>
                                                    <input type="radio" name="item_size" id="optionsRadios2"  value="L">L
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="item_size" id="optionsRadios3" value="Other">XL
                                                </label>
                                                <label>
                                                    <input type="radio" name="item_size" id="optionsRadios3" value="Other">XXL
                                                </label>
                                                <label>
                                                    <input type="radio" name="item_size" id="optionsRadios3" value="Other">3XL
                                                </label>
                                            </div>
                                        </div>
                         

                          

                         <label>Enter Quantity </label>
                         <input class="form-control" type="number" name="item_qty" placeholder=" Quantity"><br>
                         
                         <label>Enter Price(1 piece) </label>
                         <input class="form-control" type="number" name="item_price" placeholder=" LKR-"><br>

                            
                        
       

                     <button type="submit"  value="submit" name="submit" class="btn btn-info">Add Vendor </button>
                    </div>
                 
                           </div>
                       </form>
                   </div>
               </div>
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
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="js/bootstrap-fileupload.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>


</body>
</html>
               