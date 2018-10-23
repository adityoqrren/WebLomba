<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>Register</h2>
    <form action="proses-register.php" method="POST">
        <p><label for="name">Name : </label>
        <input type="text" name="name" placeholder="input name"></p>
        <p><label for="email">Email : </label>
        <input type="text" name="email" placeholder="input email"></p>
        <p><label for="tgllahir">Tanggal Lahir : </label>
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
        </p>
        <p><label for="username">Username : </label>
        <input type="text" name="username" placeholder="input username">
        </p>
        <p><label for="password">Password : </label>
        <input type="password" name="password" placeholder="input password">
        </p>
        <p><input type="submit" name="register" value="daftar"></p>

        <?php
            if(isset($_GET['status'])){
                if($_GET['status']=="gagal"){
                    echo "<p>Register Fail!</p>";
                }
            }
        ?>
    </form>
</body>
</html>