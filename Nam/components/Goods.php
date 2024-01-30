<?php 
    session_start();
    include_once "../service/config.php";
    if(!isset($_SESSION['unique_id'])){
      
    }
?>
<?php include_once 'Header.php' ?>
<body>
    <?php include_once 'main-header.php' ?>
    <?php include_once 'NAV.php' ?>
    <div class="container-Goods">
        <div class="wrapper-Goods">
        <?php
                
                $conn = mysqli_connect("localhost","root","root","72dctm22");

                $search = '';
                isset($_GET['searchInput']) ? $search = $_GET['searchInput'] : '';
            
                $sql = "SELECT * FROM product WHERE CONCAT(product_id,producer_id,product_name) LIKE '%$search%'";

                $data = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($data) > 0){
                        foreach($data as $row){
                            ?>                            
                                <div class="item">
                                    <span class="menuTips">...
                                        <ul>
                                            <li><a href="../service/delete.php?product_id=<?php echo $row['product_id'] ?>">Delete</a></li>
                                            <li><a href="">Update</a></li>
                                        </ul>
                                    </span>
                                    <div class="info-Goods">
                                        <span class="product_id">ID:<?php echo $row['product_id'] ?></span>
                                        <span class="product_name">Tên Sản Phẩm:<?php echo $row['product_name'] ?></span>
                                        <span class="produce_name">Ma Cung Cấp:<?php echo $row['producer_id'] ?></span>
                                        <span class="price">Giá:<?php echo $row['price'] ?></span>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                           <div class=""></div>
                        <?php
                    }
                ?>

            
        </div>
        <div class="addProduct"><ion-icon name="add-outline"></ion-icon></div>
        <div class="addProduct addProducer"><ion-icon name="people-outline"></ion-icon></div>
    </div>

    <?php include_once 'GoodsUpdate.php' ?>

    <?php include_once 'producer.php' ?>

    <script src="../js/goods.js" ></script>
</body>
</html>