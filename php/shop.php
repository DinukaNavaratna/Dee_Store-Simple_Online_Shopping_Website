<?php

    //array("image", prod_id, price, "name")
    $shop_products = array (
        /*
        array("product-1.jpg", 1, 10, "Product 1"),
        array("product-2.jpg", 2, 20, "Product 2"),
        array("product-3.jpg", 3, 30, "Product 3"),
        array("product-4.jpg", 4, 40, "Product 4"),
        array("product-5.jpg", 5, 50, "Product 5"),
        array("product-6.jpg", 6, 60, "Product 6"),
        array("product-4.jpg", 4, 40, "Product 4"),
        array("product-5.jpg", 5, 50, "Product 5"),
        array("product-6.jpg", 6, 60, "Product 6")
        */
    );

    //$page_count = 5;
    
    require_once 'db_con.php';
    try {
        if($_GET['cat'] == "search"){
            if(isset($_POST['first']) && $_POST['first'] == "true"){
                echo "<script>console.log('First');</script>";
                if(isset($_POST['keyword']) && $_POST['keyword'] != ''){
                    echo "<script>console.log('Key');</script>";
                    $_SESSION['keyword'] = $_POST['keyword'];
                    $_GET['pg'] = 1;
                    if(isset($_SESSION['image'])){
                        unset($_SESSION['image']);
                    }
                } else if(isset($_FILES['image'])){
                    echo "<script>console.log('Imag');</script>";
                    $_SESSION['image'] = $_FILES['image'];
                    $_GET['pg'] = 1;
                    if(isset($_SESSION['keyword'])){
                        unset($_SESSION['keyword']);
                    }
                }
            }
            if(isset($_SESSION['keyword']) && $_SESSION['keyword'] != ''){
                try {        
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql= "SELECT * FROM `products` WHERE name LIKE '%".$_SESSION['keyword']."%' LIMIT ".(($_GET['pg']-1) * 9).", 9;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    
                    // set the resulting array to associative
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($results as $result) {
                        array_push($shop_products, array($result['img'],$result['id'],$result['price'],$result['name']));
                    }
                    
                    $sql = "SELECT COUNT(id) AS 'count' FROM products WHERE name LIKE '%".$_SESSION['keyword']."%';";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    $page_count = (int) (($results[0]['count']/9)+1);
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
            } else if(isset($_SESSION['image']) && $_SESSION['image'] != ''){
                if($_SESSION['image']['name'] != ''){
                    $image=rand(111111111,999999999).'_'.$_SESSION['image']['name']; 
                    move_uploaded_file($_FILES['image']['tmp_name'],"./img/tmp/".$image);
                    
                    $url = 'http://localhost:5000/';
                    $ch = curl_init($url);
                    $payload = json_encode(array("image_name" => $image));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
        
                    if ($result === FALSE) {
                        $results = [];
                        $page_count = 0;
                    }
        
                    $similar_img = preg_split ("/\,/", $result);
                    $data = array();

                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    foreach ($similar_img as $img) {
                        try {
                            $sql= "SELECT * FROM `products` WHERE img LIKE '%".$img."%' LIMIT ".(($_GET['pg']-1) * 9).", 9;";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();

                            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            foreach($results as $result) {
                                array_push($shop_products, array($result['img'],$result['id'],$result['price'],$result['name']));
                            }
                            
                            $sql = "SELECT COUNT(id) AS 'count' FROM products WHERE img LIKE '%".$img."%';";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            $page_count = (int) (($results[0]['count']/9)+1);
                        } catch(Exception $e) {
                            
                        }
                    }
                    $conn = null;
                 }
            }
        } else {
            if(isset($_SESSION['keyword'])){
                unset($_SESSION['keyword']);
            }
            if(isset($_SESSION['image'])){
                unset($_SESSION['image']);
            }
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if(isset($_GET['price'])){
                $sql = "SELECT * FROM `products` WHERE category=".$_GET['cat']." AND price<=".$_GET['price']." LIMIT ".(($_GET['pg']-1) * 9).", 9;";
            } else {
                $sql = "SELECT * FROM `products` WHERE category=".$_GET['cat']." LIMIT ".(($_GET['pg']-1) * 9).", 9;";
            }
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            // set the resulting array to associative
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($results as $result) {
                array_push($shop_products, array($result['img'],$result['id'],$result['price'],$result['name']));
                //echo "<script>console.log('Res: ".implode(" ",array($result['img'],$result['id'],$result['price'],$result['name']))."');</script>";
            }
            if(isset($_GET['price'])){
                $sql = "SELECT COUNT(id) AS 'count' FROM products WHERE category=".$_GET['cat']." AND price<=".$_GET['price'].";";
            } else {
                $sql = "SELECT COUNT(id) AS 'count' FROM products WHERE category=".$_GET['cat'].";";
            }
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $page_count = (int) (($results[0]['count']/9)+1);
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;

?>