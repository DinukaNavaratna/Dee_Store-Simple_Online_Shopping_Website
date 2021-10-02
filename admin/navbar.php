<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="AdminHome.php">BLUSH BOUTIQUE.LK</a>
            </div>

            <div class="header-right">

                <a href="message-task.php" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.php" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="#" class="btn btn-danger" title="Logout" onclick="logout();"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="img/Blush Logo-2.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $_SESSION['admin_name']; ?>
                            <br />
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                     
                         <ul class="nav nav-second-level">
                           
                            
                            
                           
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Sales <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.php"><i class="fa fa-coffee"></i>Invoice</a>
                            </li>
                            
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a href="table.php"><i class="fa fa-flash "></i>Order Tables </a>
                        
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-desktop "></i> Add Details <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="form.php"><i class="fa fa-desktop "></i>Add Product </a>
                            </li>
                             <li>
                                <a href="form-advance.php"><i class="fa fa-desktop "></i>Add Employee</a>
                            </li>
                             <li>
                                <a href="addVendor.php"><i class="fa fa-desktop "></i>Add Vendor</a>
                            </li>
                           
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-circle-o"></i> View Details <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="viewOrder.php"><i class="fa fa-circle-o "></i>View Orders </a>
                            </li>
                             <li>
                                <a href="viewEmp.php"><i class="fa fa-circle-o "></i>View Employee</a>
                            </li>
                             <li>
                                <a href="viewVendor.php"><i class="fa fa-circle-o "></i>View Vendor</a>
                            </li>
                           
                        </ul>
                    </li>
                      <li>
                        <a href="gallery.php"><i class="fa fa-anchor "></i>Gallery</a>
                    </li>
                   
                    
                    
                    <li>
                        <a href="blank.php"><i class="fa fa-square-o "></i>Blank Page</a>
                    </li>
                </ul>

            </div>

        </nav>