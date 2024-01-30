<?php 
    session_start();
    include_once 'config.php';

    $producer_id = rand(1000,10000000);
    $producer_name = $_GET['producer_name'];

    $sql = "SELECT producer_name FROM producer";

    $checkName = mysqli_query($conn, $sql);

    $arrName =[];
    if(mysqli_num_rows($checkName) > 0) {
        while($row = mysqli_fetch_assoc($checkName))
        {
           array_push($arrName,$row['producer_name']);
        }
    }
    if(in_array($producer_name,$arrName)){
        echo "<script>alert('ĐÃ CÓ NHÀ CUNG CẤP')</script>";
        echo "<script>window.location.href='http://localhost/Nam/components/Goods.php'</script>";
    }
    else
    {
       $query = mysqli_query($conn,"INSERT INTO producer VALUES ({$producer_id},'{$producer_name}')");
       if($query){
        echo "<script>window.location.href='http://localhost/Nam/components/Goods.php'</script>";
       }
    }
?>