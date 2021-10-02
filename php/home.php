<?php

    //array("filter_cat", "image", prod_id, price, "name")
    $home_products = array (
        /*array("cat1", "product-1.jpg", 1, 10, "Product 1"),
        array("cat2", "product-2.jpg", 2, 20, "Product 2"),
        array("cat3", "product-3.jpg", 3, 30, "Product 3"),
        array("cat4", "product-4.jpg", 4, 40, "Product 4"),
        array("cat5", "product-5.jpg", 5, 50, "Product 5"),
        array("cat6", "product-6.jpg", 6, 60, "Product 6"),
        array("cat7", "product-4.jpg", 4, 40, "Product 4"),
        array("cat1", "product-5.jpg", 5, 50, "Product 5"),
        array("cat2", "product-6.jpg", 6, 60, "Product 6")*/
    );

    require_once 'db_con.php';
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM `products` LIMIT 9;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // set the resulting array to associative
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($results as $result) {
            array_push($home_products, array('cat'.$result['id'],$result['img'],$result['id'],$result['price'],$result['name']));
            //echo "<script>console.log('Res: ".implode(" ",array('cat'.$result['id'],$result['img'],$result['id'],$result['price'],$result['name']))."');</script>";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>