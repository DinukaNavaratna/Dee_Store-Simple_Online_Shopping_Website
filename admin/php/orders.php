<?php

    if(isset($_GET['status'])){
        if($_GET['status'] == "Completed"){
            $status1 = "Pending";
        } else {
            $_GET['status'] = "Pending";
            $status1 = "Completed";
        }
    } else {
        $status1 = "Completed";
        $_GET['status'] = "Pending";
    }

    $status = $_GET['status'];

    require_once 'db_con.php';
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM `orders` WHERE status='$status';";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        $orders = array();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($results as $result) {
            $sql1 = "SELECT order_items.p_id, order_items.qty, products.name AS p_name FROM order_items
                INNER JOIN products ON order_items.p_id = products.id WHERE order_items.o_id=".$result['id'].";";
            echo "<script>console.log('Res: ".$sql1."');</script>";
            $stmt1 = $conn->prepare($sql1);
            $stmt1->execute();
            
            $item_list = array();
            $results1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
            foreach($results1 as $result1) {
                array_push($item_list, array($result1['p_id'], $result1['p_name'], $result1['qty']));
            }
            array_push($orders, array($result['id'],$result['name'],$result['phone'],$result['email'],$result['address'],$result['city'],$result['province'],$result['postcode'],$result['country'],$result['total'],$result['timestamp'],$item_list));
            //echo "<script>console.log('Res: ".implode(" ",array($result['img'],$result['id'],$result['price'],$result['name']))."');</script>";
        }
        $sql = "SELECT COUNT(id) AS 'count' FROM orders WHERE status='$status';";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $order_count = $results[0]['count'];
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>