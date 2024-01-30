<?php 
    $id= $_GET['product_id'];

    include_once 'config.php';

    $delete = "DELETE FROM product WHERE product_id=$id";

    mysqli_query($conn, $delete);

    echo "<script>window.location.href='http://localhost/Nam/components/Goods.php'</script>";
?>