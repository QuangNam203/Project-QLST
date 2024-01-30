<div class="customItem">
    <div class="closeSuccess"></div>
    <div class="layoutWrapper">
        <form action="../service/customitems.php" class="wrapper-Items formSuccess" method="post">
            <div class="image">
                <span></span>
                <img src="" alt="">
            </div>
            <div class="introduce">
                <div class="introduceText">
                    <input type="text" class="productId" name="productId" hidden>
                    <input type="text" class="product_name" name="product_name" hidden>
                    <div class="name-produce"></div>
                    <span class="precio">
                        <ul>
                            <li><i style="text-decoration: line-through;"></i></li>
                            <li><i></i></li>
                            <li><i>35% giảm</i></li>
                            <input type="text" class="price" name="price" hidden>
                        </ul>
                    </span>
                    <div class="seguro">
                        <span>Bảo hiểm Thiết bị điện tử</span>
                    </div>
                    <div class="clasificar">
                        <span>Phân Loại</span>
                        <div class="clasificar-btn">
                            <span class="loai">loại 1</span>
                            <span class="loai">loại 2</span>
                            <input type="text" class="classify" name="classify" value="" hidden>
                        </div>
                    </div>
                    <div class="number">
                        <span class="reduce">-</span>
                        <input type="number" value="1" min="1" name="number">
                        <span class="introduce">+</span>
                    </div>
                    <div class="perform">
                        <button class="addCart"><ion-icon name="bag-add-outline"></ion-icon>them vao gio hang</button>
                        <button type="submit" class="successBuy"><ion-icon name="checkmark-outline"></ion-icon>Mua</button>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>
</div>
