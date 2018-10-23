<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>Login to our website</h2>
    <p>Don't have account?<a href="register.php">Sign Up</a></p>
    <form action="proses-login.php" method="POST">
        <p><label for="username">Username : </label>
        <input type="text" name="username" placeholder="input username or email"></p>
        <p><label for="password">Password : </label>
        <input type="password" name="password" placeholder="input password"></p>
        <p><input type="submit" name="login" value="masuk"></p>
    </form>
    <?php
            if(isset($_GET['status'])){
                if($_GET['status']=="password"){
                    echo "<p>Login Fail! Wrong Password</p>";
                }else{
                    echo "<p>Login Fail! Your Username or Email not registered</p>";
                }
                
            }
        ?>
</body>
</html>