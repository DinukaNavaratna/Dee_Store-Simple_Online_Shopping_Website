<?php
    $u_id = $_SESSION['user'];
    require_once 'db_con.php';
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT `email`, `name`, `country`, `address`, `postcode`, `city`, `province`, `phone` FROM `users` WHERE id=".$u_id.";";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // set the resulting array to associative
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $u_name = $result[0]['name'];
        $u_num = $result[0]['phone'];
        $u_email = $result[0]['email'];
        $u_addr = $result[0]['address'];
        $u_postcode = $result[0]['postcode'];
        $u_city = $result[0]['city'];
        $u_province = $result[0]['province'];
        $u_country = $result[0]['country'];
        $names = explode(" ",$u_name);
        $f_name = $names[0];
        $l_name = $names[1];
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>