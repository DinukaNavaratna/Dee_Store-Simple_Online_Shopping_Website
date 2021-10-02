<?php
    session_start();
    if($_POST['func'] == "complete_order"){
        complete_order();
    } else if($_POST['func'] == "logout"){
        logout();
    } else if($_POST['func'] == "login"){
        login();
    }  else if($_POST['func'] == "add_product"){
        add_product();
    }  else if($_POST['func'] == "update_product"){
        update_product();
    }  else if($_POST['func'] == "delete"){
        delete();
    }

    function login(){
        $uname = $_POST['username'];
        $psw = $_POST['psw'];

        require_once 'db_con.php';
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT id, name FROM `admin` WHERE username='".$uname."' AND psw='".md5($psw)."';";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            // set the resulting array to associative
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $admin = $result[0]['id'];
            $admin_name = $result[0]['name'];
            if($admin != null){
                $_SESSION['admin'] = $admin;
                $_SESSION['admin_name'] = $admin_name;
                $_SESSION['admin_start'] = time();
                echo "success";
            } else {
                echo "error";
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
    
    function logout(){
        unset($_SESSION['admin']);
        unset($_SESSION['admin_name']);
        unset($_SESSION['admin_start']);
        echo "success";
    }
    
    function complete_order(){
        $o_id = $_POST['o_id'];

        require_once 'db_con.php';
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE orders SET status='Completed' WHERE id='".$o_id."';";
            $stmt = $conn->prepare($sql);
            if ($stmt->execute()) { 
                echo "success";
             } else {
                echo "failed";
             }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
    
    function add_product(){
        $name = $_POST['name'];
        $cat = $_POST['cat'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $rank = $_POST['rank'];
        $des = $_POST['des'];
        $ship = $_POST['ship'];
        $img1 = $_FILES['img1'];
        $img2 = $_FILES['img2'];
        $img3 = $_FILES['img3'];
        $img4 = $_FILES['img4'];
        $img5 = $_FILES['img5'];
        $img_arr = array();

        for($x=1; $x<6; $x++){
            if (implode((${"img".$x})) != 40){
                $target_dir = "../../img/product-img/";
                $target_file = $target_dir . basename($_FILES["img".$x]["name"]);
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image
                $check = getimagesize($_FILES["img".$x]["tmp_name"]);
                if($check !== false) {
                    if (move_uploaded_file($_FILES["img".$x]["tmp_name"], $target_file)) {
                        array_push($img_arr, $_FILES["img".$x]["name"]);
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                } else {
                    echo "File is not an image.";
                }
            }
        }

        require_once 'db_con.php';
        try {
            $sql = "INSERT INTO products (category, name, price, qty, rank, img, description, shipping)
            VALUES ('$cat', '$name', '$price', '$qty', '$rank', '".$img1["name"]."', '$des', '$ship')";
            $conn->exec($sql);
            $p_id = $conn->lastInsertId();
            if($p_id != null || $p_id != ""){
                $sql = "INSERT INTO img (prod_id, path) VALUES ";
                for($x=0; $x<count($img_arr); $x++){
                    if($x==0){
                        $sql .= "($p_id, '".$img_arr[$x]."')";
                    } else {
                        $sql .= ", ($p_id, '".$img_arr[$x]."')";
                    }
                }
                $conn->exec($sql);
            }
            header("Location: ../form.php");
            exit;
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        $conn = null;
    }
    
    function update_product(){
        $p_id = $_POST['update'];
        $name = $_POST['name'];
        $cat = $_POST['cat'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $rank = $_POST['rank'];
        $des = $_POST['des'];
        $ship = $_POST['ship'];
        $img1 = $_FILES['img1'];
        $img2 = $_FILES['img2'];
        $img3 = $_FILES['img3'];
        $img4 = $_FILES['img4'];
        $img5 = $_FILES['img5'];
        $img_arr = array();

        for($x=1; $x<6; $x++){
            if (implode((${"img".$x})) != 40){
                $target_dir = "../../img/product-img/";
                $target_file = $target_dir . basename($_FILES["img".$x]["name"]);
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image
                $check = getimagesize($_FILES["img".$x]["tmp_name"]);
                if($check !== false) {
                    if (move_uploaded_file($_FILES["img".$x]["tmp_name"], $target_file)) {
                        array_push($img_arr, $_FILES["img".$x]["name"]);
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                } else {
                    echo "File is not an image.";
                }
            }
        }

        require_once 'db_con.php';
        try {
            if(count($img_arr) != 0){
                $sql = "UPDATE products SET category='$cat', name='$name', price='$price', qty='$qty', rank='$rank', img='".$img1["name"]."', description='$des', shipping='$ship' WHERE id=$p_id;";
            } else {
                $sql = "UPDATE products SET category='$cat', name='$name', price='$price', qty='$qty', rank='$rank', description='$des', shipping='$ship' WHERE id=$p_id;";
            }
            $conn->exec($sql);
            if($p_id != null || $p_id != ""){
                if(count($img_arr) != 0){
                    $sql = "DELETE FROM img WHERE prod_id=$p_id;";
                    $conn->exec($sql);
                    
                    $sql = "INSERT INTO img (prod_id, path) VALUES ";
                    for($x=0; $x<count($img_arr); $x++){
                        if($x==0){
                            $sql .= "($p_id, '".$img_arr[$x]."')";
                        } else {
                            $sql .= ", ($p_id, '".$img_arr[$x]."')";
                        }
                    }
                    $conn->exec($sql);
                }
            }
            header("Location: ../form.php");
            exit;
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        $conn = null;
    }
    
    function delete(){
        $p_id = $_POST['p_id'];

        require_once 'db_con.php';
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM `products` WHERE id=".$p_id.";";
            $stmt = $conn->prepare($sql);
            if ($stmt->execute()) { 
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "DELETE FROM `img` WHERE prod_id=".$p_id.";";
                $stmt = $conn->prepare($sql);
                if ($stmt->execute()) { 
                    echo "success";
                 } else {
                    echo "failed";
                 }
             } else {
                echo "failed";
             }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
?>