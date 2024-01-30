<div class="wrapperContainer">
    <div class="title">
            <form action="" class="form-search">
                <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                    <div class="form">
                        <i class="fa fa-search"></i>
                        <input type="text" class="form-control form-input" name="searchInput" placeholder="Search anything...">
                        <span class="left-pan">
                        
                            <button class="btn-search"><i class="fa fa-microphone"></i></button>
                        </span>
                    </div>
                    </div>
                </div>
            </form>
    </div>
    <div class="wrapper-class">
    <?php
        include_once '../service/config.php';

        $search = '';

        isset($_GET['searchInput']) ? $search = $_GET['searchInput'] : '';
    
        $sql = "SELECT * FROM product WHERE CONCAT(product_name,price) LIKE '%$search%';";

        $data = mysqli_query($conn,$sql);
            if(mysqli_num_rows($data) > 0){
                foreach($data as $row){
                    ?>
                        <div class="product">
                            <div class="items-product">
                                <div class="img" style="width: 100%;
                                height: 80%;
                                background-image: url(../images/<?php echo $row['img'] ?>);
                                background-size: cover;">
                                <button class="btn-Buy"><ion-icon name="bag-check-outline"></ion-icon></button>
                                <button class="btn-cart"><ion-icon name="duplicate-outline"></ion-icon></button>
                            </div>
                                
                                <div class="text">
                                    <p><?php echo $row['product_name'] ?></p>
                                    <span><?php echo $row['price'] ?> <sup>đ</sup></span>
                                </div>
                            </div>
                            <input type="text" class="product_id" value="<?php echo $row['product_id'] ?>" hidden>
                            <input type="text" class="describe" value="<?php echo $row['describe'] ?>" hidden>
                            <input type="text" class="price" value="<?php echo $row['price'] ?>" hidden>
                        </div>
                    <?php
                }
            }
            else
            {
                ?>
                    <div></div>
                <?php
            }
        ?>
    </div>
</div>