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
    <div class="wrapper">
        <section class="users">
            <?php 
                include_once '../service/config.php';
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                }
            ?>
            <header>
                <div class="content">
                    <img src="../images/<?php echo $row['img']; ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
                    </div>
                </div>
                <a href="#" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><ion-icon name="search-outline"></ion-icon></button>
            </div>
            <div class="users-list">
                
            </div>
        </section>
        <?php include_once 'chat.php' ?>
    </div>
    <script src="../js/users.js" ></script>
    <script src="../js/ChatAdmin.js" ></script>
</body>
</html>