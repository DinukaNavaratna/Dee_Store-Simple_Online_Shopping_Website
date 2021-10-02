<?php
/*
    $product_id = $_GET['id'];
    $product_cat = "Women";
    $product_cat_no = 1;
    $product_name = "Women_Product_1";
    $product_price = 500;
    $product_availability = 5;
    $product_rank = 3;
    $product_info = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae, tempore maxime rerum iste dolorem mollitia perferendis distinctio. Quibusdam laboriosam rerum distinctio. Repudiandae fugit odit, sequi id! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae qui maxime consequatur laudantium temporibus ad et. A optio inventore deleniti ipsa.";
    $product_shipping = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae, tempore maxime rerum iste dolorem mollitia perferendis distinctio. Quibusdam laboriosam rerum distinctio. Repudiandae fugit odit, sequi id! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae qui maxime consequatur laudantium temporibus ad et. A optio inventore deleniti ipsa.";
    $product_imgs = array("product-9.jpg", "product-2.jpg", "product-3.jpg", "product-4.jpg");

    //array("image", prod_id, price, "name")
    $similar_products = array (
        array("product-1.jpg", 1, 10, "Product 1"),
        array("product-2.jpg", 2, 20, "Product 2"),
        array("product-3.jpg", 3, 30, "Product 3"),
        array("product-2.jpg", 2, 20, "Product 2"),
        array("product-3.jpg", 3, 30, "Product 3")
    );
*/

    $product_id = $_GET['id'];
    require_once 'db_con.php';
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT products.category, products.name, products.price, products.qty, products.rank, products.description, products.shipping, categories.name AS cat_name
                FROM `products` INNER JOIN `categories` ON products.category = categories.id WHERE products.id=".$product_id.";";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        // set the resulting array to associative
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $product_cat = $result[0]['cat_name'];
        $product_cat_no = $result[0]['category'];
        $product_name = $result[0]['name'];
        $product_price = $result[0]['price'];
        $product_availability = $result[0]['qty'];
        $product_rank = $result[0]['rank'];
        $product_info = $result[0]['description'];
        $product_shipping = $result[0]['shipping'];

        $product_imgs = array();
        $sql = "SELECT path FROM `img` WHERE prod_id=".$product_id.";";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($results as $result){
            array_push($product_imgs, $result['path']);
        }

        $similar_products = array();
        $sql = "SELECT img, id, price, name FROM `products` WHERE category=".$product_cat_no." Limit 5;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($results as $result){
            if($result['id'] != $product_id){
                array_push($similar_products, array($result['img'], $result['id'], $result['price'], $result['name']));
            }
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>