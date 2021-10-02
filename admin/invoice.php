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
     <!--PAGE LEVELC STYLES-->
    <link href="css/invoice.css" rel="stylesheet" />
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
                        <h1 class="page-head-line">INVOICE </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                       <div >
     
      <div class="row pad-top-botm ">
         <div class="col-lg-6 col-md-6 col-sm-6 ">
            <img src="img/bblogo31.jpg" style="padding-bottom:20px;" /> 
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <strong>  Blush Boutique.LK</strong>
              <br />
                  <i>Address :</i> 24/9 , New Flower Lane,
              <br />
                  Galle Road,Colombo,
              <br />
                  Sri Lanka.
              
         </div>
     </div>
     <div  class="row text-center contact-info">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr />
             <span>
                 <strong>Email : </strong>  blushboutique2020@gmail.com 
             </span>
             <span>
                 <strong>Call : </strong>  +94 763124578 
             </span>
              <span>
                 <strong>Fax : </strong>  +011 2457890
             </span>
             <hr />
         </div>
     </div>
     <div  class="row pad-top-botm client-info">
         <div class="col-lg-6 col-md-6 col-sm-6">
         <h4>  <strong>Client Information</strong></h4>
           <strong>  Jhon De Mel</strong>
             <br />
                  <b>Address :</b> 14/9 ,Park Lane,
              <br />
                 Colombo.
             <br />
             <b>Call :</b> +94 753456776
              <br />
             <b>E-mail :</b> johnmel12@gmail.com
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <h4>  <strong>Payment Details </strong></h4>
            <b>Bill Amount :  1000 LKR </b>
              <br />
               Bill Date :  01st September 2021
              <br />
               <b>Payment Status :  Paid </b>
               <br />
               Delivery Date :  10th September 2021
              <br />
               Purchase Date :  01st September 2021
         </div>
     </div>
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID.</th>
                                    <th> Names</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                     <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>21</td>
                                    <td>Thavi Amanda</td>
                                    <td>0785674534</td>
                                    <td>thavi@gmail.com </td>
                                    <td>10500LKR</td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
               </div>
             <hr />
             <div class="ttl-amts">
               <h5>  Total Amount :10500 </h5>
             </div>
             <hr />
              <div class="ttl-amts">
                  <h5>  Tax : 900 LKR ( by 10 % on bill ) </h5>
             </div>
             <hr />
              <div class="ttl-amts">
                  <h4> <strong>Bill Amount : 11 400 LKR</strong> </h4>
             </div>
         </div>
     </div>
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <strong> Important: </strong>
             <ol>
                  <li>
                    This is an electronic generated invoice so doesn't require any signature.

                 </li>
                 <li>
                     Please read all terms and polices on Our Stores for returns, replacement and other issues.

                 </li>
             </ol>
             </div>
         </div>
      <div class="row pad-top-botm">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr />
             
             <a href="invoice1.php" class="btn btn-primary btn-lg" >Print Invoice</a>
             &nbsp;&nbsp;&nbsp;
              <a href="#" class="btn btn-success btn-lg" >Download In Pdf</a>

             </div>
         </div>
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


</body>
</html>
