<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Learning - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="../admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../admin/css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
<br>
<center><h1>WWW.LOMBAWEB.COM</h1></center>
<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form action="proses-login.php" method="POST">
          <div class="form-group"  >
                            <div class="form-label-group">
                                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username or Email" required="required" autofocus="autofocus">
                                <label for="inputEmail">Username or Email</label>
                            </div>
                            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <input class="btn btn-primary btn-block" type="submit" value="login" name="login" >
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Register an Account</a>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../admin/vendor/jquery/jquery.min.js"></script>
    <script src="../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    
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