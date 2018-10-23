<?php require_once("auth.php") ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3><?php echo $_SESSION["user"]["name"]; ?> Profile</h3>
    <p><?php echo $_SESSION["user"]["email"]; ?>    <a href="logout.php">Logout</a></p>
    <br>
    <center>
    <img  width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
    </center>
    
</body>
</html>