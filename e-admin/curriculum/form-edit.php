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
                        <a href="index.php">Curriculum</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Curriculum</li>
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
                <!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="index.php"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    
                    <?php
						$id = $_GET['id'];
						$sql = $db->query("select course.title as judul,course.id_course,curriculum.* from curriculum inner join course on id_course = course_id where id_cur = $id");
                        $value = $sql->fetch(PDO::FETCH_ASSOC);
                    ?>

					<div class="card-body">
                        <form action="proses-edit.php" method="post" enctype="multipart/form-data" >
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
						<div class="form-group">
								<label for="title">Title*</label>
								<input class="form-control "
								 type="text" name="title" placeholder="Curriculum Title" value="<?php echo $value['title']; ?>"/>
								
                            </div>
                           
                            
                            <div class="form-group">
								<label for="updated_at">Course*</label>
								<select class="form-control "
								 name="course" value="<?php echo $value['judul']; ?>">
									 <?php
										 $sql = $db->query("select * from course");
										 while($value = $sql->fetch(PDO::FETCH_ASSOC)){
											 $id = $value['id_course'];
											 $title = $value['title'];
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

		<?php include("../partials/scrolltop.php") ?>

		<?php include("partials/js.php") ?>

</body>

</html>