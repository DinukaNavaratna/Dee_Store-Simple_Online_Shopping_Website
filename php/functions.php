<?php
    session_start();
    if($_POST['func'] == "clear"){
        clear_cart();
    } else if($_POST['func'] == "add"){
        add_to_cart();
    } else if($_POST['func'] == "update"){
        update_cart();
    } else if($_POST['func'] == "order"){
        save_order();
    } else if($_POST['func'] == "login"){
        login();
    }  else if($_POST['func'] == "confirm_order"){
        confirm_order();
    } else if($_POST['func'] == "cancel_order"){
        cancel_order();
    } 

    function clear_cart(){
        $_SESSION["cart"] = array();
        $_SESSION["cart_total"] = 0;
        echo "success";
    }

    function update_cart(){
        $cart = $_SESSION["cart"];
        $cart_total = 0;
        $qtys = $_POST['qtys'];
        for($x=0; $x<count($cart); $x++){
            $cart[$x][2] = $qtys[$x];
            $cost = $cart[$x][2] * $cart[$x][3];
            $cart_total = $cart_total + $cost;
        }
        $_SESSION["cart"] = $cart;
        $_SESSION["cart_total"] = $cart_total;
        echo "success";
    }

    function add_to_cart(){
        $cart = $_SESSION["cart"];
        $cart_total = $_SESSION["cart_total"];
        array_push($cart, array($_POST['img'], $_POST['name'], $_POST['qty'], $_POST['price'], $_POST['id']));
        $_SESSION["cart"] = $cart;
        $cost = $_POST['price'] * $_POST['qty'];
        $cart_total = $cart_total + $cost;
        $_SESSION["cart_total"] = $cart_total;
        echo "success";
    }

    function save_order(){
        if(!isset($_SESSION['cart_total']) || !isset($_SESSION['cart']) || $_SESSION['cart_total']==0){
            echo "cart empty";
            return;
        }
        $name = $_POST['first_name']." ".$_POST['last_name'];
        $country = $_POST['country'];
        if($_POST['street_address2'] != ""){
            $address = $_POST['street_address'].", ".$_POST['street_address2'];
        } else {
            $address = $_POST['street_address'];
        }
        $postcode = $_POST['postcode'];
        $city = $_POST['city'];
        $province = $_POST['state'];
        $phone = $_POST['phone_number'];
        $email = $_POST['email_address'];
        $total = $_SESSION['cart_total'];
        $cart = $_SESSION["cart"];
        $create_account = $_POST["create_account"];
        
        require_once 'db_con.php';
        try {
            $sql = "INSERT INTO orders (name, country, address, postcode, city, province, phone, email, total)
            VALUES ('$name', '$country', '$address', '$postcode', '$city', '$province', '$phone', '$email', $total)";
            $conn->exec($sql);
            $o_id = $conn->lastInsertId();
            if($o_id != null || $o_id != ""){
                $sql = "INSERT INTO order_items (o_id, p_id, qty, total) VALUES ";
                for($x=0; $x<count($cart); $x++){
                    //$cart = array(array("image", "name, "qty", "price", "id"));
                    $cost = $cart[$x][2] * $cart[$x][3];
                    if($x==0){
                        $sql .= "($o_id, ".$cart[$x][4].", ".$cart[$x][2].", ".$cost.")";
                    } else {
                        $sql .= ", ($o_id, ".$cart[$x][4].", ".$cart[$x][2].", ".$cost.")";
                    }
                }
                $conn->exec($sql);
            }
            session_destroy();
          } catch(PDOException $e) {
            echo $e;
          }
          try {
          if($create_account == true){
              $sql = "INSERT INTO users (email, psw, name, country, address, postcode, city, province, phone)
              VALUES ('$email', '".md5(strtolower($_POST['first_name']))."', '$name', '$country', '$address', '$postcode', '$city', '$province', '$phone')";
              $conn->exec($sql);
              echo "success 1:".$o_id;
          }
        } catch(PDOException $e) {
            echo "success:".$o_id;
        }
          $conn = null;
    }

    function login(){
        $email = $_POST['email'];
        $psw = $_POST['psw'];

        require_once 'db_con.php';
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT id FROM `users` WHERE email='".$email."' AND psw='".md5($psw)."';";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            // set the resulting array to associative
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $u_id = $result[0]['id'];
            if($u_id != null){
                $_SESSION['user'] = $u_id;
                $_SESSION['user_start'] = time();
                echo "success";
            } else {
                echo "error";
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }

    function confirm_order(){
        $id = $_POST['id'];

        require_once 'db_con.php';
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE orders SET status='Pending' WHERE id=$id;";
            $conn->exec($sql);
            echo "success";
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }

    function cancel_order(){
        $id = $_POST['id'];

        require_once 'db_con.php';
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE orders SET status='Cancelled' WHERE id=$id;";
            $conn->exec($sql);
            echo "success";
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }


    
?>