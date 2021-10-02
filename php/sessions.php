<?php
    session_start();
    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"] = array();
    }
    if(!isset($_SESSION["cart_total"])){
        $_SESSION["cart_total"] = 0;
    }
    if(isset($_SESSION['user'])){
        if (time() - $_SESSION['user_start'] > 30) { // 120 seconds = 2 minutes
            unset($_SESSION['user']);
            unset($_SESSION['user_start']);
        }
    }
?>