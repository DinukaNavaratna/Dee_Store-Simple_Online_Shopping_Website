<?php
   include_once 'php/sessions.php';
    if(!isset($_SESSION['admin'])){
        header("Location: login.php"); 
        exit();
      }

?>
<?php

$con = mysqli_connect("localhost","root","","bb_store");
$query ="SELECT emp_gender , count(*) as number FROM employee GROUP BY emp_gender";
$result = mysqli_query($con,$query);

$query1 ="SELECT emp_type , count(*) as number FROM employee GROUP BY emp_type";
$result1 = mysqli_query($con,$query1);


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
                        <h1 class="page-head-line">Employee Data Analyze</h1>
                        <h1 class="page-subhead-line">WELCOME TO CLOTHING STORE... </h1>

                    </div>
                </div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {


      // Define the chart to be drawn.
      var data = new google.visualization.arrayToDataTable([['Gender','Number'],

            <?php
                while($row = mysqli_fetch_array($result))
                {
                    echo "['".$row["emp_gender"]."' , ".$row["number"]."],";
                }
            ?>
        

        ]);
  
        var options = {
            title: 'Percenetage of Male and Female Data From  Employee'

        };

      // Instantiate and draw the chart.
      var chart = new google.visualization.PieChart(document.getElementById('myPieChart'));
      chart.draw(data, options);
    }
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart1);
     function drawChart1() {


      // Define the chart to be drawn.
      var data = new google.visualization.arrayToDataTable([['Employee Type','Number'],

            <?php
                while($row = mysqli_fetch_array($result1))
                {
                    echo "['".$row["emp_type"]."' , ".$row["number"]."],";
                }
            ?>
        

        ]);
  
        var options = {
            title: 'Percenetage of Employee Type Data From Employee'

        };

      // Instantiate and draw the chart.
      var chart = new google.visualization.PieChart(document.getElementById('myPieChart1'));
      chart.draw(data, options);
    }
  </script>
</head>
<body>
  <br/>
  <div style="width:1000px;">
    <h3 align="center"> Pie Chart data Analysing for Gender </h3>
    <br>

  <div id="myPieChart" style="width:1000px; height: 500px;" ></div>

</div>

<br>
<div style="width:1000px;">
    <h3 align="center"> Pie Chart data Analysing for Employee Type </h3>
   

  <div id="myPieChart1" style="width:1000px; height: 500px;" ></div>

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
               