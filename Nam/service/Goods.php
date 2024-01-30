<?php 

    session_start();
    include_once "config.php";

    $producer_id = rand(1000,10000000);
    $product_id = rand(10000,10000000);
    $producer_name = $_GET['producer_name'];
    $product_name =$_GET['product_name'];
    $describe = $_GET['describe'];
    $quantity = $_GET['quantity'];
    $price = $_GET['price'];
    $image = $_GET['image'];
    $date = date('d/m/Y');


    $query1 = mysqli_multi_query($conn,"INSERT INTO producer VALUES ({$producer_id},'{$producer_name}');");
    $query2 = mysqli_multi_query($conn,"INSERT INTO product
            VALUES ({$product_id}, {$producer_id},'{$product_name}', '{$describe}', '{$image}',{$quantity},'{$price}');");

   if($query1 && $query2){
        echo "<script>window.location.href='http://localhost/Nam/components/Goods.php'</script>";
   }

?>