<?php 
    session_start();
    include_once "../service/config.php";
    if(!isset($_SESSION['unique_id'])){
      
    }
?>
<?php include 'Header.php' ?>
<body>
    <?php include_once 'main-header.php' ?>
    <?php include_once 'NAV.php' ?>
    <?php include_once '../Login/Logout.php' ?>

    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-5">
                    <h2>User <b>Management</b></h2>
                </div>
                <div class="col-sm-7">
                    <!-- Search form -->
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
                    <button href="#" class="btn btn-secondary addProduct" data-toggle="modal" data-target="#myModal"><i class="material-icons">&#xE147;</i> <span>Add Product</span></button>
                    <button href="#" class="btn btn-secondary"><i class="material-icons" >&#xE24D;</i> <span>Export to Excel</span></button>						
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Mã Sản Phẩm</th>						
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $conn = mysqli_connect("localhost","root","root","72dctm22");

                $search = '';
                isset($_GET['searchInput']) ? $search = $_GET['searchInput'] : '';
            
                $sql = "SELECT * FROM product WHERE CONCAT(product_id,product_name,price) LIKE '%$search%'";

                $data = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($data) > 0){
                        foreach($data as $row){
                            ?>
                                <tr>
                                   
                                    <td><?php echo $row['product_id'] ?></td>
                                    <td><?php echo $row['product_name'] ?></td>
                                    <td><?php echo $row['quantity'] ?></td>
                                    <td><?php echo $row['price'] ?></td>
                                    <!-- <td>
                                        <a href="" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                        <a href="delete.php?id=" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                                    </td> -->
                                </tr>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <tr>
                                <td colspan="5"></td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
        
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Them Sinh Vien</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                <form action="Insert.php" method="post">
                <div class="form-group">
                        <label for="hoten">first name</label>
                        <input type="text" id="fname" class="form-control" name="fname" >
                    </div>
                    <div class="form-group">
                        <label for="hoten">last name</label>
                        <input type="text" id="lname" class="form-control" name="lname" >
                    </div>
                    <div class="form-group">
                        <label for="masv">role</label>
                        <input type="text" id="role" name="role" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lop">department</label>
                        <input type="text" id="department" name="department" class="form-control">
                    <button class="btn btn-success">Them Sinh Vien</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    

    <script src="../js/Home.js"></script>
    <script src="../js/Logout.js"></script>
</body>
</html>