<?php 
    // session_start();
    // include_once "../service/config.php";
    // if(!isset($_SESSION['unique_id'])){
      
    // }
?>
<div class="account">
    <?php 
        include_once '../service/config.php';
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        $row = mysqli_fetch_assoc($sql);
    ?>
    <img src="../images/<?php echo $row['img'] ?>" alt="" class="avatar">
    <span class="name"><?php echo $row['fname']. " " . $row['lname'] ?></span>
    <a href="../service/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout"><ion-icon name="power-outline"></ion-icon></a>
    <a href="#" class="setting"><ion-icon name="settings-outline"></ion-icon></a>
</div>
