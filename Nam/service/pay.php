<?php 
    session_start();
    include_once "config.php";
    $userId = $_POST['uniqueID'];
    $order_id = $_POST['orderID'];
    $product_id = $_POST['productID'];
    $address = $_POST['Address'];
    $sdt = $_POST['sdt'];
    $img = $_POST['img'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $date = date('d/m/Y');

    // cắt chuỗi explode
    $listOrderID = explode(",",$order_id);
    $imgPay = explode(",",$img);
    $productId = explode(",",$product_id);
    $prices = explode(",",$price);
    $quantites = explode(",",$quantity);
    $sql = "";

    
    $checkID = "SELECT * FROM product;";

    $data = mysqli_query($conn,$checkID);

    for($i=0; $i< count($listOrderID);$i++){
        if(mysqli_num_rows($data) > 0){
            while($row=mysqli_fetch_assoc($data)){
                if($row['product_id']==$productId[$i]){
                    $quantityOld = $row['quantity'];
                    
                    $quantityNew = (int)$quantityOld - (int)$quantites[$i];
    
                    $sql .= "UPDATE product SET quantity = $quantityNew  WHERE product_id = {$productId[$i]};";
    
                    $sql .= "DELETE FROM `order` WHERE unique_id = {$userId} AND order_id ={$listOrderID[$i]};";
    
                    $sql .= "UPDATE warehouse SET status = 'success', `address` = '{$address}' , phone = '{$sdt}', `date` = '{$date}' WHERE unique_id = {$userId} AND  order_id = {$listOrderID[$i]};";
    
                    $sql .= "INSERT INTO `Notification`(unique_id,order_id,img,date,status)
                            VALUES({$userId},{$listOrderID[$i]},'{$imgPay[$i]}',{$date},'success');";
    
                    $sql .= "INSERT INTO `statistical`
                            VALUES({$productId[$i]},{$prices[$i]},'{$date}');";
                }
            }
        }
    }
    $query = mysqli_multi_query($conn,$sql);

    if($query){
        echo "<script>window.location.href='http://localhost/Nam/client/'</script>";
    }
?>