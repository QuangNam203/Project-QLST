<?php
    session_start();
    include_once "config.php";
    $unique_id = $_SESSION['unique_id'];
    $msg = '';
    $sql = "SELECT w.product_name , n.* FROM `warehouse` AS w RIGHT JOIN notification AS n ON w.order_id = n.order_id
            WHERE w.unique_id = {$unique_id}";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No Product";
    }else if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){

            $row['status'] === "cancel" ? $msg = "Đã hủy đơn" : $msg = "Đã nhận hàng";
            
            $output .= '<div class="content">
                            <img src="../images/'.$row['img'].'" alt="">
                            <div class="text-content">
                                <p>'.$msg.'</p>
                                <div class="info-Product">
                                    <span>'.$row['product_name'].'</span>
                                    <span>'.$row['date'].'</span>
                                </div>
                            </div>
                        </div>
                        <hr style="width: 80%; margin: auto; opacity: 0.5;">';
        }
    }
    echo $output;
?>