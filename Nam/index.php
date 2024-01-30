<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Login/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <i style="--clr:#00ff0a;"></i>
        <i style="--clr:#ff0057;"></i>
        <i style="--clr:#fffd44;"></i>
        <form action="" class="login" method="post">
            <h2>Login</h2>
            <div class="error-text"></div>
            <div class="inputBx">
                <input type="text" placeholder="Username" name="email" required>
            </div>
            <div class="inputBx">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="inputBx button">
               <input type="submit" value="Sign in" name="submit">
            </div>
            <div class="links">
                <a href="#">Forget Password</a>
                <a href="http://localhost/Nam/Login/signup.php">Signup</a>
            </div>
        </form>
    </div>

    <script src="js/Login.js" ></script>
</body>
</html>