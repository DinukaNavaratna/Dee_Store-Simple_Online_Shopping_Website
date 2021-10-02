<?php
require('fpdf183/fpdf.php');
session_start();
     include 'config/config.php';
//db connection
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

<head>
        <title>Appointment Invoice</title>
    </head>
    <body>
        <h2 align="center">select invoice:</h2><br>
        <form method="get" action="invoice1.php">
            <select name="id"  >
                <?php
                //show in voice list as option
                $query= mysqli_query($con,"select * from orders");
                while($invoice=mysqli_fetch_array($query)){
                    echo "<option value='" .$invoice['id']."'>" .$invoice['id']."</option>";

                }

                ?>
            </select>
            <style>

  #button {
  background-color: #fec2b0; /* Green */
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
#box{
  border: none;
  color: white;
  padding: 10px 22px;  
}
</style>
            <input id="button" type="submit" value="Generate">
        </form>
    </body>
    </html>