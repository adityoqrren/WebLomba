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
                        <a href="index.php">Jawaban</a>
                    </li>
                    <li class="breadcrumb-item active">New Pilihan</li>
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
								<label for="updated_at">Pilihan*</label>
								<select class="form-control "
								 name="pilihan">
                                     <option value="a">a</option>
                                     <option value="b">b</option>
                                     <option value="c">c</option>
                                     <option value="d">d</option>
								</select>
								
							</div>
                            <div class="form-group">
								<label for="name">isi*</label>
								<textarea class="form-control"
								 name="isi" placeholder="isi Soal..."></textarea>
							</div>
                            
                            <div class="form-group">
								<label for="updated_at">Soal*</label>
								<select class="form-control "
								 name="soal">
									 <?php
										 $sql = $db->query("select * from soal");
										 while($value = $sql->fetch(PDO::FETCH_ASSOC)){
											 $id = $value['id_soal'];
											 $title = $value['soal'];
											 echo "<option value='$id'>$title</option>";
											 
										 }
									 ?>
								</select>
								
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




							
									
								
   

