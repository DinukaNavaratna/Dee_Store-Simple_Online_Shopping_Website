<?php
    session_start();
    if(isset($_SESSION['admin'])){
        if (time() - $_SESSION['admin_start'] > 6000) { // 120 seconds = 2 minutes
            unset($_SESSION['admin']);
            unset($_SESSION['admin_start']);
        }
    }
?>