<?php
    include_once 'php/sessions.php';
    if(!isset($_SESSION['admin'])){
        header("Location: login.php"); 
        exit();
    }
?>
<?php 
        include_once 'config/config.php';
        $result = mysqli_query($con, "SELECT * FROM orders ");
    ?>
<!DOCTYPE html>
<html xmlns="">
<head>
    <meta charset="utf-8" >
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
    <style >
    .pt-3-half { padding-top: 1.4rem; }
                </style>
</head>
<body>
    <?php include_once 'php/navbar.php'; ?>

<!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View Order  Data</h1>
                        <h1 class="page-subhead-line">WELCOME TO OUR CLOTHING STORE.... </h1>

                    </div>
                </div>
                <!-- /. ROW  -->

 <?php
    if(mysqli_num_rows($result) > 0){

 ?>               <!-- Editable table -->
                
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
    Order Data Table
  </h3>
  <br>
  <style>

  #button {
  background-color: #25cc9a; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<a href="ordInvoice.php" id="button" class="button">Print PDF</a> 

<hr/>

<div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Orders
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Country</th>
                                            <th>Address</th>
                                            <th>PostCode</th>
                                            <th>City</th>
                                            <th>Province</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Total</th>
                                            <th>Status </th>
                                        </tr>
                                    </thead>
                                    <?php
        $i =0;
        while($row = mysqli_fetch_array($result)){
            ?>
        <tbody>
          <tr>
            <td ><?php echo $row["id"]; ?></td>
            <td ><?php echo $row["name"]; ?></td>
            <td ><?php echo $row["country"]; ?></td>
            <td ><?php echo $row["address"]; ?></td>
            <td ><?php echo $row["postcode"]; ?></td>
            <td ><?php echo $row["city"]; ?></td>
            <td ><?php echo $row["province"]; ?></td>
            <td ><?php echo $row["phone"]; ?></td>
            <td ><?php echo $row["email"]; ?></td>
            <td ><?php echo $row["total"]; ?></td>
            <td ><?php echo $row["status"]; ?></td>
                                        
        <?php
            $i++;
        }
            ?>
            </tbody>
        </table>
        <?php
        }
        else{
            echo "No result found";
            }
        ?>
          
        
      
    </div>
  </div>
</div> 

      </a>
         
        </div>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->

















  






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
        &copy; 2020 Company | Design By : <a href="" target="_blank">Blush Boutique.lk</a>
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
    
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/functions.js"></script>
    


</body>
</html>
