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
                        <h1 class="page-head-line">Add Employee Details</h1>
                        <h1 class="page-subhead-line">WELCOME TO CLOTHING STORE... </h1>

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-10">

                       <div class="panel panel-info">
                        <div class="panel-heading">
                           Add Employee
                        </div>
                        
                        <div class="panel-body">
                        <form role="form" action="php/addEmpPHP.php" method="POST" enctype="multipart/form-data">
                   
                    <div class="form-group">

                      <label>Enter First Name</label>
                         <input class="form-control" type="text" placeholder="Your Name.." name="emp_fname"><br>
                          
                       <label>Enter Last Name</label>
                         <input class="form-control" type="text" placeholder="Your Name" name="emp_lname"><br>
                          
                           <label>Enter B'Day </label>
                         <input class="form-control" type="Date" name="emp_bday" placeholder=" B'Day"><br>

                          <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="emp_gender" id="optionsRadios1" value="Male" checked="">Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="emp_gender" id="optionsRadios2"  value="Female">Female
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="emp_gender" id="optionsRadios3" value="Other">Other
                                                </label>
                                            </div>
                                        </div>
                         

                          <label>Enter Address </label>
                         <input class="form-control" type="text" name="emp_address" placeholder=" Home Address"><br> 

                         <label>Enter Phone </label>
                         <input class="form-control" type="phone" name="emp_phone" placeholder=" (+94)"><br>
                         
                         <label>Enter Email </label>
                         <input class="form-control" type="email" name="emp_email" placeholder=" Jerry@gmail.com"><br>

                            <div class="form-group" >
                                            <label>Select Employee Post</label>
                                            <select  name="emp_type" class="form-control">
                                                <option>Sales Manager</option>
                                                <option>Account Manager</option>
                                                <option>Stylist</option>
                                                <option>Fashion Designer</option>
                                                <option>Merchandiser</option>
                                                <option>Assistant Manager</option>
                                                <option>Technicians</option>
                                                <option>sales Workers</option>
                                                <option>Stock Keeper</option>
                                                <option>Store Cleaner</option>
                                            </select>
                                        </div>
                                        <hr>
                        
       

                     <button type="submit"  value=""submit name="submit" class="btn btn-info">Register Employee </button>
                    </div>
                 
                           </div>
                        <div class="">
                        </div>
                        <div class="panel-heading">
                           
                        <div class="panel-body">

                            
                                 </div>
                            </form>  
                        </div>
                    

                            </div>
                        </div>
                        <form>
                        

                            </div><br>
                            
                        
                        </div>
                    </div>
                  </form>
                          
          

                     

                 



                            </div>
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
