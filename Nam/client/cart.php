<?php include_once '../components/Header.php' ?>
<body>
    <?php include_once '../components/main-header.php'; ?>
    <?php include_once '../components/Notification.php' ?>
    <?php include_once '../components/messNotification.php' ?>
    <?php include_once '../components/notifiNumber.php' ?>
    <section class="section-Cart">
        <div class="product-cart">
            <div class="items-product-cart">
                <?php 
                    include_once '../service/config.php';

                    $unique_id = $_GET['user_id'];

                    $sql = "SELECT o.*, p.img FROM `order` AS o LEFT JOIN product AS p ON o.product_id = p.product_id";

                    $query = mysqli_query($conn,$sql);

                    while($row = mysqli_fetch_assoc($query)){
                ?>
                
                    <div class="item-product">
                        <div class="favourite">
                            <button>yeu thich</button>
                            <span>TOTO</span>
                            <a href="#"><ion-icon name="chatbubbles-outline"></ion-icon></a>
                        </div>
                        <div class="custom-items">
                            <div class="permission">

                            </div>
                            <div class="fix-item-product">
                                <input type="checkbox" value="<?php echo $row['order_id'] . "/" . $row['img'] ."/".$row['product_name'] ."/". $row['classify'] ."/". $row['price'] ."/". $row['product_id'] ."/". $row['quantity']?>" class="checkbox">
                                <img src="../images/<?php echo $row['img'] ?>" alt="">
                                <span class="text-item"><?php echo $row['product_name'] ?></span>
                                <span class="classify"><?php echo $row['classify'] ?></span>
                                <div class="input"><button class="reduce">-</button><input type="text" value="<?php echo $row['quantity'] ?>" min="0"><button class="increase">+</button></div>
                                <span class="unitPrice"><?php echo $row['price'] ?><sup>đ</sup></span>
                                <form action="../service/cart.php" method="get" class="setting">
                                    <input type="text" value="<?php echo $_GET['user_id'] ?>" name="user_id" hidden>
                                    <input type="text" value="<?php echo $row['order_id'] ?>" name="order_id" hidden>
                                    <input type="text" value="<?php echo $row['img'] ?>" name="img" hidden>
                                    <button class="btn btn-dange delete" name="delete"><ion-icon name="close-outline"></ion-icon></button>
                                    <button class="btn btn-dange Success" name="success"><ion-icon name="checkmark-outline"></ion-icon></button>
                                </form>
                            </div>
                        </div>
                    </div>  
            
                <?php 
                    }
                ?>
             </div>
            <!-- pay -->

            <div class="payClient">
                <div class="voucher">
                    <!-- <a class="iconVoucher" href="#"><ion-icon name="ticket-outline"></ion-icon></a>
                    <span>Voucher</span>
                    <a href="#"  class="linkVoucher">Chọn Hoặc nhập mã</a> -->
                </div>
                <div class="successPay">
                    <input type="text" value="<?php echo $_GET['user_id'] ?>" hidden class="uniqueID">
                    <button type="submit" >MUA</button>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once 'Pay.php' ?>

    <?php include_once 'back.php' ?>

    <script src="../js/Carts.js" ></script>
    <script src="../js/Notification.js" ></script>
    <script src="../js/notifiNumber.js" ></script>
</body>
</html>