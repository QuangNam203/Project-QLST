<?php 
    $username = $_GET['username'];
    $password = $_GET['password'];

    $conn = mysqli_connect("localhost","root","","72dctm22");

    $sql = "SELECT * FROM account";

    $data = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($data);
    
    if(isset($_GET['sign'])){
      if($row['username'] == $username && $row['password'] == $password){
        echo "<script>window.location.href='../program.php'</script>";
      }
      else{
        echo 'loi';
      }
    }
?>