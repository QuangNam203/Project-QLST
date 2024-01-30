<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $enc_pass = $row['password'];
            if($password === $enc_pass){
                if($row['permission'] === "admin"){
                    $status = "Active now";
                    $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                    if($sql2){
                        // gán session = unique_id của ng đăng nhập
                        $_SESSION['unique_id'] = $row['unique_id'];
                        echo "admin";
                    }else{
                        echo "Something went wrong. Please try again!";
                    }
                }else if($row['permission'] === "client"){
                    $status = "Active now";
                    $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                    if($sql2){
                        // gán session = unique_id của ng đăng nhập
                        $_SESSION['unique_id'] = $row['unique_id'];
                        echo "client";
                    }else{
                        echo "Something went wrong. Please try again!";
                    }
                } 
            }else{
                echo "Email or Password is Incorrect!";
            }
        }else{
            echo "$email - This email not Exist!";
        }
    }else{
        echo "All input fields are required!";
    }
?>