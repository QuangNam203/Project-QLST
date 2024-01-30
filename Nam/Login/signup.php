<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <i style="--clr:#00ff0a;"></i>
        <i style="--clr:#ff0057;"></i>
        <i style="--clr:#fffd44;"></i>
        <form action="#" class="login" method="POST" enctype="multipart/form-data" autocomplete="off">
            <h2>Login</h2>
            <div class="error-text"></div>
            <div class="name-details">
                <div class="inputBx">
                    <input type="text" placeholder="First Name" name="fname" required>
                </div>
                <div class="inputBx">
                    <input type="text" placeholder="Last Name" name="lname" required>
                </div>
            </div>
            <div class="inputBx">
                <input type="text" placeholder="Enter your email" name="email" required>
            </div>
            <div class="inputBx">
                <input type="password" placeholder="Enter new password" name="password" required>
            </div>
            <div class="field image">
                <label>Select Image</label>
                <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
             </div>
            <div class="inputBx button">
               <input type="submit" value="Sign in" name="submit">
            </div>
            <div class="links">
                <a href="#">Forget Password</a>
                <a href="http://localhost/Nam/">Login Now</a>
            </div>
        </form>
    </div>

    <script src="../js/Signup.js" ></script>
</body>
</html>