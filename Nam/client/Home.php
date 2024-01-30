<?php 
    session_start();
    include_once "../service/config.php";
    if(!isset($_SESSION['unique_id'])){
      
    }
?>
<?php include_once '../components/Header.php' ?>
<body>

    <?php include_once '../components/main-header.php' ?>
    
    <?php include_once '../components/Notification.php' ?>

    <?php include_once '../components/messNotification.php' ?>

    <?php include_once '../components/notifiNumber.php' ?>

    <?php include_once 'container.php' ?>

    <?php include_once 'customItems.php' ?>
    
    <?php include_once '../components/client-chat.php' ?>


    <script src="../js/Home.js"></script>
    <script src="../js/chatClient.js"></script>
    <script src="../js/chatToggle.js"></script>
    <script src="../js/Product.js" ></script>
    <script src="../js/Notification.js" ></script>
    <script src="../js/notifiNumber.js" ></script>

</body>
</html>