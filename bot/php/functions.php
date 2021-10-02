<?php
    if($_POST['func'] == "order_status"){
        order_status();
    } else if($_POST['func'] == "create_new_account"){
        create_new_account();
    } else if($_POST['func'] == "feedback"){
        feedback();
    }

    function order_status(){
        $id = $_POST['o_id'];
        $email = $_POST['email'];

        require_once 'db_con.php';
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT status FROM `orders` WHERE id=".$id." AND email='".$email."';";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            // set the resulting array to associative
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $status = $result[0]['status'];
            if($status != null){
                echo $status;
            } else {
                echo "error";
            }
        } catch(Exception $e) {
            echo "error: " . $e->getMessage();
        }
        $conn = null;
    }

    function create_new_account(){
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_address = $_POST['user_address'];
        $user_city = $_POST['user_city'];
        $user_country = $_POST['user_country'];
        $user_postcode = $_POST['user_postcode'];
        $user_province = $_POST['user_province'];
        $user_phone = $_POST['user_phone'];
        $user_psw = md5($_POST['user_psw']);

        require_once 'db_con.php';
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO users (email, psw, name, country, address, postcode, city, province, phone)
            VALUES ('$user_email', '".$user_psw."', '$user_name', '$user_country', '$user_address', '$user_postcode', '$user_city', '$user_province', '$user_phone')";
            $conn->exec($sql);
            echo "success";
        } catch(Exception $e) {
            echo "error: " . $e->getMessage();
        }
        $conn = null;
    }

    function feedback(){
        $o_id = $_POST['o_id'];
        $message = $_POST['message'];

        require_once 'db_con.php';
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT orders.email, users.name FROM orders LEFT JOIN users ON orders.email = users.email WHERE orders.id=".$o_id.";";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            // set the resulting array to associative
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $email = $result[0]['email'];
            $name = $result[0]['name'];

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO feedback (user_name, order_id, user_email, feed_msg)
            VALUES ('$name', '".$o_id."', '$email', '$message')";
            $conn->exec($sql);
            echo "success";
        } catch(Exception $e) {
            echo "error: " . $e->getMessage();
        }
        $conn = null;
    }


?>