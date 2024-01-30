<div class="wrapper-pay">
    <div class="listProduct">
        <!-- <div class="product">
            <img src="images/1695548272IMG_0015.JPG" alt="">
            <div class="content">
                <div class="name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem error, optio reiciendis aspernatur tempora illum ut ipsa vel labore excepturi eveniet. Fugiat voluptas quod nobis ipsam aperiam earum error blanditiis.</div>
                <div class="describe">
                    <span>loai 1</span>
                    <span>x1</span>
                    <span>100000 <sup>đ</sup></span>
                </div>
            </div>
        </div> -->
    </div>
    <form action="../service/pay.php" method="post" class="info-Product">
        <div class="payMoney">
            <h3>Tổng Tiền: <span><sup>đ</sup></span></h3>
        </div>
        <div class="infoClinent">
            <input type="text" name="uniqueID" hidden class="uniqueID">
            <input type="text" name="productID" hidden class="productID">
            <input type="text" name="img" hidden class="img">
            <input type="text" name="quantity" hidden class="quantity" >
            <input type="text" name="orderID" hidden class="orderID" >
            <input type="text" name="price" hidden class="price" >

            <label for="Address">Địa Chỉ</label>
            <input type="text" name="Address" required>

            <label for="sdt">Số Điện Thoại</label>
            <input type="number" name="sdt" required>

            <label for="mulpay">Phương Thức</label>
            <select name="mulpay" id="mulpay">
                <option value="money">Tiền Mặt</option>
                <option value="pay">Chuyển Khoản</option>
            </select>

            <textarea name="note" id="note" cols="40" rows="3" placeholder="Ghi Chú"></textarea>
        </div>
        <button type="submit">Thanh Toán</button>
    </form>
</div>