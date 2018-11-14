<?php include("../config.php") ?>
<!DOCTYPE html>
<html lang="en">
<?php include("partials/head.php") ?>


<body id="page-top">

	<?php include("partials/navbar.php") ?>
	<div id="wrapper">

		<?php include("partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				 <!-- Breadcrumbs-->
                 <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="../index.php">User</a>
                    </li>
                    <li class="breadcrumb-item active">New User</li>
                </ol>

                <?php if ($_GET['status']=="sukses"){ ?>
				<div class="alert alert-success" role="alert">
                    <?php echo "input sukses";?>
                </div>
                <?php }else if($_GET['status']=="gagal"){ ?>
                <div class="alert alert-failed" role="alert">
                    <?php echo "input gagal";?>
                </div>
                        
                    <?php } ?>

                <div class="card mb-3">
                <div class="card-header">

                <a href="index.php"><i class="fas fa-arrow-left"></i> Back</a>
                </div>

					<div class="card-body">
						<form action="proses_add.php" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <div class="form-row">
                            <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                                <label for="firstName">First name</label>
                            </div>
                            </div>
                            <div class="col-md-6">
                             <div class="form-label-group">
                                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last name" required="required">
                                <label for="lastName">Last name</label>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="form-group">
                              <div class="form-label-group">
                                <input type="text" name='username' id="inputUsername"  class="form-control" placeholder="Username" required="required">
                                <label for="inputUsername">Username</label>
                                </div>
                              </div>
                              <div class="form-group">
                              <div class="form-label-group">
                                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                                <label for="inputEmail">Email address</label>
                                </div>
                              </div>
                              <div class="form-group">
                              <div class="form-label-group">
                                <div><label for="tgllahir">   Tanggal Lahir : </label></div>
                                    <select name="tgl" class="form-control">
                                        <?php
                                            for ($i=1; $i <=31 ; $i++) {
                                                echo "<option value=$i>$i</option>";
                                            }
                                        ?>
                                    </select>
                                    <select name="bln" class="form-control">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) {
                                                echo "<option value=$i>$i</option>";
                                            }
                                        ?>
                                    </select>
                                    <select name="thn" class="form-control">
                                        <?php
                                            for ($i=2019; $i >=1900 ; $i--) {
                                                echo "<option value=$i>$i</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                              </div>
                              <div class="form-group">
                              <div class="form-row">
                                <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                                    <label for="inputPassword">Password</label>
                                </div>
                                </div>
                            <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                                <label for="confirmPassword">Confirm password</label>
                            </div>
                            </div>
                            </div>
                            </div>
                            
                            
                            
                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

                        </div>

<div class="card-footer small text-muted">
    * required fields
</div>


</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->
<?php include("../partials/footer.php") ?>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


	<!-- Scroll to Top Button-->
    <?php include("../partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php include("../partials/modal.php") ?>

    <?php include("partials/js.php") ?>

</body>

</html>




							
									
								
   

