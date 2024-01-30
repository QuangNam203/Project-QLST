<?php 
    session_start();
    include_once "config.php";
    $unique_id = $_SESSION['unique_id'];

    $sql = "SELECT count(order_id) AS `number` FROM `notification` WHERE unique_id = {$unique_id}";

    $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);

        echo $row['number'];
    }else{
        echo '';
    }
?>