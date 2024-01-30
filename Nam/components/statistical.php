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

    <div class="statistical-table">
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
        <table class="table">
            <thead>
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>									
                    <th>Tiền</th>
                    <th>ngày</th>
                </tr>
            </thead>
            <tbody>
            <?php
                
                $conn = mysqli_connect("localhost","root","root","72dctm22");

                $search = '';
                isset($_GET['searchInput']) ? $search = $_GET['searchInput'] : '';
            
                $sql = "SELECT s.product_id, p.product_name ,s.price,s.date FROM statistical AS s LEFT JOIN product AS p ON s.product_id = p.product_id WHERE CONCAT(s.product_id,s.date) LIKE '%$search%'";

                $data = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($data) > 0){
                        foreach($data as $row){
                            ?>
                                <tr>
                                    <td><?php echo $row['product_id'] ?></td>
                                    <td><?php echo $row['product_name'] ?></td>
                                    <td><?php echo $row['price'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
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

    <div class="container-nafi">
            <div class="chart">
                <?php 
                    
                    $conn = mysqli_connect("localhost","root","root","72dctm22");

                    $sql1 = "SELECT distinct(date) FROM statistical;";

                    $sql2 = "SELECT sum(price) AS tien FROM statistical group by date;";
                
                    $query1 = mysqli_query($conn,$sql1);
                    $query2 = mysqli_query($conn,$sql2);
                
                ?>
                <input type="text" value="<?php 
                    while($row = mysqli_fetch_array($query1)){
                        $date = $row['date'] . " ";
                        echo $date;
                 } ?>" class= "date" hidden>
                <input type="text" value="<?php 
                    while($row = mysqli_fetch_array($query2)){
                        $price = $row['tien'] . " ";
                        echo $price;
                 } ?>" class= "price" hidden>
                <canvas id="barchart" ></canvas>

            </div>
            <!-- <div class="chart">
                <canvas id="doughnut" ></canvas>
            </div> -->
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/Chart.js"></script>
    <script src="../js/chart2.js"></script>
    <script src="../js/Home.js"></script>
    <script src="../js/Logout.js"></script>
</body>
</html>


