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
</head>
<body>
    <?php include_once 'php/navbar.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h1 class="page-subhead-line">WELCOME TO BLUSH BOUTIQUE.LK </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="venChart.php">
                                <i class="fa fa-bolt fa-5x"></i>
                                <h5>vendors</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="empChart.php">
                                <i class="fa fa-bolt fa-5x"></i>
                                <h5>Employees</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="orderChart.php">
                                <i class="fa fa-dollar fa-5x"></i>
                                <h5>Orders</h5>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">

                                <div id="reviews" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="item active">

                                            <div class="col-md-10 col-md-offset-1">

                                                <h4><i class="fa fa-quote-left"></i>What you wear is how you present yourself to the world, especially today, when human contacts are so quick. Fashion is instant language.  <i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="img/user.gif" alt="" class="img-u image-responsive" />
                                                </div>
                                                <h5 class="pull-right"><strong class="c-black">Miuccia Prada</strong></h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-10 col-md-offset-1">

                                                <h4><i class="fa fa-quote-left"></i>I don't design clothes.I design dreams.. <i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="img/user.png" alt="" class="img-u image-responsive" />
                                                </div>
                                                <h5 class="pull-right"><strong class="c-black">Ralph Lauren</strong></h5>
                                            </div>

                                        </div>
                                        <div class="item">
                                            <div class="col-md-10 col-md-offset-1">

                                                <h4><i class="fa fa-quote-left"></i>Fashion is part of the daily air and it changes all the time, with all the events. You can even see the approaching of a revolution in clothes. You can see and feel everything in clothes. <i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="img/user.gif" alt="" class="img-u image-responsive" />
                                                </div>
                                                <h5 class="pull-right"><strong class="c-black">Diana Vreeland</strong></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active"></li>
                                        <li data-target="#reviews" data-slide-to="1"></li>
                                        <li data-target="#reviews" data-slide-to="2"></li>
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->

                                </div>

                            </div>

                        </div>
                        <!-- /. ROW  -->
                        <hr />
                        <br>

                        <div class="panel panel-default">

                            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 5px solid #fec2b0;">

                                <div class="carousel-inner">
                                    <div class="item active">

                                        <img src="img/slideshow/9.jpg" alt="" />

                                    </div>
                                    <div class="item">
                                        <img src="img/slideshow/10.jpg" alt="" />

                                    </div>
                                    <div class="item">
                                        <img src="img/slideshow/12.jpg" alt="" />

                                    </div>
                                </div>
                                <!--INDICATORS-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <!--PREVIUS-NEXT BUTTONS-->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /.REVIEWS &  SLIDESHOW  -->
                    <div class="col-md-4">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">BLUSH Boutique Team Message</h4>
                                <p class="list-group-item-text" style="line-height: 30px;">
                                    We now server Customers all over Sri Lanka and around the US and Overseas and are thrilled to be a part 
                                    of the fair trade wing of the Fashion Indusrty.We fly all around the world and our fashionable product are
                                     high quality product with pure eco friendly product manufacturings and we serve you the best products.
                                </p>
                            </a>
                        </div>
                     
                        
                            
                        </div>


                    </div>
                   
                </div>
                <!-- /. ROW  -->


                <div class="row">

                    <div class="col-md-8">
                        <div class="list-group">

                            
                        </div>
                        <br />
                        <!-- 16:9 aspect ratio -->
                       
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
                <!--/.Row-->
               
                <div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Post</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><span class="label label-info">CEO</span></td>
                                        <td>Miss.Neetu Yaddehige</td>
                                        <td>tutune2@gmail.com</td>
                                        <td>0763452323</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><span class="label label-primary">Director</span></td>
                                        <td>Mr.Trevin Perera</td>
                                        <td>trevin123@gmail.com</td>
                                        <td>0714562323</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><span class="label label-danger">Manager</span></td>
                                        <td>Ms.Shainy Silva</td>
                                        <td>shinee55@gmail.com</td>
                                        <td>0723451212</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><span class="label label-success">Admin</span></td>
                                        <td>Ms.Aisha Fernando</td>
                                        <td>aishafern12@gmail.com</td>
                                        <td>0764563423</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td><span class="label label-warning">Team Head</span></td>
                                        <td>Mr.Jay Perera</td>
                                        <td>jayperera123@gmail.com</td>
                                        <td>0764589008</td>
                                    </tr>
                                 
                                
                                </tbody>
                            </table>
                        </div>




                    </div>
                   
                
                <!--/.Row-->
                <hr />
                <div class="row" style="padding-bottom: 100px;">
                    <div class="col-md-6">
                        <div id="comments-sec">
                            <h4><strong>Send Us Your Feedback about the company</strong></h4>
                            <hr />


                            <div class="form-group  ">
                                <label>Please Write a Subject Line</label>
                                <input type="text" class="form-control" required="required" placeholder="Enter Subject Of Ticket" />
                            </div>
                            <div class="form-group ">
                                <label>Please Enter feedback</label>
                                <textarea class="form-control" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Compose &amp; Send Message</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-back noti-box">
                          
                            <div class="text-box">
                                <p class="main-text">Blush Boutique.lk </p>
                                <p>Please send your Experiances and Ideas</p>
                                <p>We hope to explore your Ideas</p>
                                <hr />
                                <p>
                                    <span class=" color-bottom-txt"><i class="fa fa-edit"></i>
                                        As a newly upcoming clothing boutique we are thankful to hear the experiances and ideas about 
                                        the services that we are providing to you and if any other remonadation for the company that as a emplloyee
                                        as a customer your ideas are highly recomnded for this
                             
                                    </span>


                                </p>
                                <hr />
                                We accept your every messages and hope to find the best from our team.
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
