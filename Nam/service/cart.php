<?php
    session_start();
    include_once '../service/config.php';
    $userId = $_GET['user_id'];
    $orderId = $_GET['order_id'];
    $img = $_GET['img'];
    $date = date('d/m/Y');

    if(isset($_GET['delete'])){
        $sql = "DELETE FROM `order` WHERE unique_id = {$userId} AND order_id = {$orderId};";

        $sql .= "UPDATE warehouse SET status = 'cancel' WHERE unique_id = {$userId} AND  order_id = {$orderId};";

        $sql .= "INSERT INTO `Notification`(unique_id,order_id,img,date,status)
                VALUES({$userId},{$orderId},'{$img}','{$date}','cancel');";
        $query = mysqli_multi_query($conn,$sql);
        if($query){
            echo "<script>window.location.href='http://localhost/Nam/client/Cart.php?user_id={$userId}'</script>";
        }
    }else if(isset($_GET['success'])){
        $sql = "DELETE FROM `order` WHERE unique_id = {$userId} AND order_id = {$orderId};";

        $sql .= "UPDATE warehouse SET status = 'success' WHERE unique_id = {$userId} AND  order_id = {$orderId};";

        $sql .= "INSERT INTO `Notification`(unique_id,order_id,img,date,status)
                VALUES({$userId},{$orderId},'{$img}','{$date}','success');";
        $query = mysqli_multi_query($conn,$sql);
        if($query){
            echo "<script>window.location.href='http://localhost/Nam/client/Cart.php?user_id={$userId}'</script>";
        }
    }
?>