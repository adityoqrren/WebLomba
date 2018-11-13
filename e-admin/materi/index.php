<?php require_once("../auth.php");
include("../config.php") ?>
<!DOCTYPE html>
<html lang="en">
<?php include("partials/head.php") ?>
  

  <body id="page-top">

    <?php include("../partials/navbar.php") ?>

    <div id="wrapper">

      <?php include("../partials/sidebar.php") ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="../index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Materi</li>
          </ol>

         
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <a href="new_form.php"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Course</th>
                      <th>isi</th>
                      <th>Create Date</th>
                      <th>Photo</th>
                      <th>Tindakan</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Title</th>
                      <th>Course</th>
                      <th>isi</th>
                      <th>Create Date</th>
                      <th>Photo</th>
                      <th>Tindakan</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                        $sql = $db->query("select curriculum.title as judul,curriculum.id_cur,materi.* from materi inner join curriculum on id_cur = curriculum_id");
                       
                        
                        while ( $value = $sql->fetch(PDO::FETCH_ASSOC)) {
                          
                            echo "<tr>";
                
                            echo "<td>".$value['title']."</td>";
                            echo "<td>".$value['judul']."</td>";
                            echo "<td>".$value['isi']."</td>";
                            echo "<td>".$value['time']."</td>";
                            echo "<td>".$value['photo']."</td>";
                            
                
                            echo "<td>";
                            echo "<a href='form-edit.php?id=".$value['id_materi']."'>Edit</a> | ";
                            echo "<a href='hapus.php?id=".$value['id_materi']."'>Hapus</a>";
                            echo "</td>";
                
                            echo "</tr>";
                        }
                        
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <?php include("../partials/footer.php") ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <?php include("../partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php include("../partials/modal.php") ?>

    <?php include("../partials/js.php") ?>

  </body>

</html>
