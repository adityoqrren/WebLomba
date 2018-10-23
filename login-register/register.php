<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
</head>
<body>
<center><h1>WWW.LOMBAWEB.COM</h1></center>
<div class="login">


    <form action="proses-register.php" method="POST">
        <div><label for="name">Name : </label>
        <input type="text" name="name" placeholder="input name"></div>
        <div><label for="email">Email : </label>
        <input type="text" name="email" placeholder="input email"></div>
        <div><label for="tgllahir">Tanggal Lahir : </label><br>
        <select name="tgl">
            <?php 
                for ($i=1; $i <=31 ; $i++) { 
                    echo "<option value=$i>$i</option>";
                }
            ?>
        </select>
        <select name="bln">
            <?php 
                for ($i=1; $i <=12 ; $i++) { 
                    echo "<option value=$i>$i</option>";
                }
            ?>
        </select>
        <select name="thn">
            <?php 
                for ($i=2019; $i >=1900 ; $i--) { 
                    echo "<option value=$i>$i</option>";
                }
            ?>
        </select>
        </div>
        <div><label for="username">Username : </label>
        <input type="text" name="username" placeholder="input username">
        </div>
        <div><label for="password">Password : </label>
        <input type="password" name="password" placeholder="input password">
        </div>
        <div><input type="submit" name="register" value="Sign Up" class="tombol"></div>

        <?php
            if(isset($_GET['status'])){
                if($_GET['status']=="gagal"){
                    echo "<script>alert('Register Fail!')</script>";
                }
            }
        ?>
    </form>
    </div>
</body>
</html>