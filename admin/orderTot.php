<?php
    include_once 'php/sessions.php';
    if(!isset($_SESSION['admin'])){
        header("Location: login.php"); 
        exit();
    }
?>
<?php

$con = mysqli_connect("localhost","root","","bb_store");
$query ="SELECT status , count(*) as number FROM orders GROUP BY status";
$result = mysqli_query($con,$query);



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
    <link href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>

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
                        <h1 class="page-head-line">Analyze  Order  Data</h1>
                        <h1 class="page-subhead-line">WELCOME TO OUR CLOTHING STORE.... </h1>

                    </div>
                </div>
                <!-- /. ROW  -->

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'Number'],
          <?php
            while($row = mysqli_fetch_array($result))
            {
              echo "['".$row["status"]."' , ".$row["number"]."],";
            }
          ?>
        
        ]);

        var options = {

        title: "Each values for Order Status Details",
        width: 600,
        height: 400,

        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(data, options);
  }

  
  </script>
  </head>
<body>
  <br><br><br><br>
  <div style="width:1000px;">
    <h3 align="center"> Bar Chart data Analysing for Order Status  </h3>
    <br>

<div id="barchart_values" style="width: 1000px; height: 500px;"></div>
</div>


<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
    Order Data Table
  </h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2">
        <div class = "table-responsive">
            <table id="order_data" class="table table-bordered table-striped" >
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product ID</th>
                        <th>Quantity </th>
                        <th>Value </th>

                    </tr>
                </thead>
                <tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">Total</th>
                            <th id="total_order"></th>

                        </tr>
                    </tfoot>
                </tbody>
                
            </table>
            
        </div>









                      </div>
                  </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    



    </script>
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
    <script src="js/editable.js"></script>
    
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/functions.js"></script>
    <script src= "https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
