<?php 
    session_start();
    include_once "config.php";
    $user_id = $_SESSION['unique_id'];

    $productId = $_POST['productId'];
    $productName = $_POST['product_name'];
    $classify = $_POST['classify'];
    $number = $_POST['number'];
    $price  = $_POST['price'] * $number * 0.75;
    $order_id = rand(100,100000);
    $sql = "INSERT INTO `order`(order_id,unique_id,product_id,product_name,classify,quantity,price)
        VALUES({$order_id},{$user_id},{$productId},'{$productName}','{$classify}',{$number},{$price});";
    
    $sql .="INSERT INTO warehouse(unique_id,order_id,product_id,product_name,classify,quantity,price,status)
        VALUES({$user_id},{$order_id},{$productId},'{$productName}','{$classify}',{$number},{$price},'transport');";

    $query = mysqli_multi_query($conn,$sql);

    if($query){
        echo "<script>window.location.href='http://localhost/Nam/client/'</script>";
    }
?>