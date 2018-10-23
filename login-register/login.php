<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="js/smain.js"></script>
</head>
<body>
    <center><h1>WWW.LOMBAWEB.COM</h1></center>
    <div class="login">
    <form action="proses-login.php" method="POST">
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" placeholder="input username or email" id="username" required>
        </div>
        <div>
            <label for="password">Password : </label>
            <input type="password" name="password" placeholder="input password" id="password" required>
        </div>
        <div>
        <input type="submit" name="login" value="masuk" class="tombol"></p>
        </div>
        <div>
        Don't have account?<a href="register.php">Sign Up</a>
        </div>
    </form>
    </div>
    
    <?php
            if(isset($_GET['status'])){
                if($_GET['status']=="password"){
                    echo "<script>alert('Wrong Password')</script>";
                }else{
                    echo "<script>alert('Wrong Username or Email')</script>";
                }
                
            }
        ?>

</body>
</html>