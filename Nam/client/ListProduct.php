<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./ListProduct.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <header>    
        <div class="log">
            
        </div>
        <div class="cart" data-toggle="modal" data-target="#myModal">
            <ion-icon name="cart-outline" class="cart-icon"></ion-icon>
        </div>
        </div>
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <div class="show-Cart">
        <form action="./Client/Cart.php">
            <table>
                <tbody>
                    <tr>
                        <td><img src="../image/meo.jpg" alt=""></td>
                        <td>iphone</td>
                        <td><span>300.000 <sup>đ</sup></span></td>
                        <td><input type="number" value="1" min="0"></td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <div class="listPay">
            <div class="top-listPay"></div>
            <div class="bottom-listPay">
                <input type="checkbox"> chọn tất cả
                <span class="payCart">100.000000</span>
                <button type="submit" class="pay" value=""><a href="http://localhost/WEB/Client/Cart.php">Mua Hàng</a></button>
            </div>
        </div>
    </div>

    <section class="section-ListProduct active" >
        <div class="content-Product">
            <?php 
                $conn = mysqli_connect("localhost","root","root","72dctm22");

                $sql = "SELECT tensv FROM sinhvien";

                $data = mysqli_query($conn,$sql);

                while($row = $data -> fetch_assoc()){
            ?>
            <div class="topicProduct">
                <div class="content">
                    <h2><?php echo $row['tensv']?></h2>
                    <span>SL:10</span>
                </div>
            </div>
            <?php 
                }
            ?>
        </div>
    </section>

    <nav>
        <div class="navigation active">
            <ul>
                <li class="list active">
                    <div class="wrapList">
                        <b></b>
                        <b></b>
                        <a href="http://localhost/WEB/program.php">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">Home</span>
                        </a>
                    </div>
                </li>
                <li class="list active">
                    <div class="wrapList">
                        <b></b>
                        <b></b>
                        <a href="http://localhost/WEB/Client/ListProduct.php">
                            <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>
                            <span class="title">Pro</span>
                        </a>
                    </div>
                </li>
                <li class="list active">
                    <div class="wrapList">
                        <b></b>
                        <b></b>
                        <a href="http://localhost/WEB/service/List.php">
                            <span class="icon"><ion-icon name="bag-outline"></ion-icon></span>
                            <span class="title">Mess</span>
                        </a>
                    </div>
                </li>
                <li class="list active">
                    <div class="wrapList">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <span class="icon"><ion-icon name="bookmarks-outline"></ion-icon></span>
                            <span class="title">Help</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <script src="./ListProduct.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>