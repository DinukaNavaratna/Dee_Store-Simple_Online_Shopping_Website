        <!-- Chat Bar BLOCK-->
        <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat With Us!
            <i id="chat-icon" style="color:#fff"; class="fa fa-fw fa-comments-o"></i>
        </button>
        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container-->   
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messasge-->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span> Loading..</span></p>                  
                        </div>
                        <!-- User Input Box-->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input type="text" id="textInput" class="input-box" name="msg" placeholder="Tap 'Enter' to send message">
                                <p></p>
                            </div>
                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color:rgba(221, 35, 35, 0.877)"; class="fa fa-fw fa-heart" onclick="heartButton() "></i>
                                <i id="chat-icon" style="color: #333"; class="fa fa-fw fa-send" onclick="sendButton() "></i>
                            </div>
                        
                        </div>
                        <div id="chat-bar-button">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo.jpg" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                            <!-- Logo Area -->
                            <div class="top_logo">
                                    <a href="#"><img src="img/core-img/logo.png" alt="Logo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="aboutUs.php">About</a></li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="feedback.php">Feedback</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="shop.php?pg=1&cat=1">Women</a></li>
                                <li><a href="shop.php?pg=1&cat=2">Men</a></li>
                                <li><a href="shop.php?pg=1&cat=3">Watches</a></li>
                                <li><a href="shop.php?pg=1&cat=4">Bags & Purses</a></li>
                                <li><a href="shop.php?pg=1&cat=5">Shoes</a></li>
                                <li><a href="shop.php?pg=1&cat=6">Accessories</a></li>
                                <li><a href="shop.php?pg=1&cat=7">Other</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-lg-5">
                        <div class="single_footer_area">
                            <div class="footer_heading mb-30">
                                <h6>Subscribe to our newsletter</h6>
                            </div>
                            <div class="subscribtion_form">
                                <form action="#" method="post">
                                    <input type="email" name="mail" class="mail" placeholder="Your email here">
                                    <button type="submit" class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Custom -->
    <script src="js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script src="bot/js/responses.js"> </script>
    <script src="bot/js/chat.js"></script>
    <script src="bot/js/functions.js"></script>
</body>

</html>