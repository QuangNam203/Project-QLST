<section class="chat-area">
    <header>
    <?php 
        include_once '../service/config.php';
        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
        }
    ?>
        <img src="../images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
        </div>
    </header>  
    <div class="chat-box">
       
    </div>
    <form action="#" class="typing-area" autocomplete="off">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram"></i></button>
    </form>
</section>