<div class="table-update-goods">
    <form action="../service/Goods.php" method="get">
        <div class="input">
            <label for="producer_name">Nhà Cung Cấp</label>
            <select name="producer_name" id="producer_name">
                <?php 
                    include_once '../service/config.php';

                    $sql = "SELECT producer_name FROM producer";

                    $data = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($data) > 0){
                        while($row = mysqli_fetch_assoc($data)){
                            
                ?>
                    <option value="LG"><?php echo $row['producer_name'] ?></option>
                <?php
                        }
                    }   
                ?>
            </select>
        </div>
        
        <div class="input">
            <label for="product_name">Tên Sản Phẩm</label>
            <input type="text" name="product_name" required>
        </div>

        <div class="input">
            <label for="describe">Giới thiệu</label>
            <input type="text" name="describe" required>
        </div>

        <div class="input">
            <label for="quantity">Số Lượng</label>
            <input type="number" name="quantity" required>
        </div>

        <div class="input">
            <label for="price">Giá</label>
            <input type="number" name="price" required>
        </div>
        <div class="field image">
            <label>Select Image</label>
            <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>

        <div class="input button">
            <input type="submit" >
        </div>
    </form>
</div>
