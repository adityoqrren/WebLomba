<?php
    include("../config.php");
    $id = $_GET['id'];
    $sql = $db->query("select * from course where id_course = $id");
    $value = $sql->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<?php include("partials/head.php");?>
<body class="single-courses-page">
    <div class="page-header">
        <?php include("partials/navcourses.php");?>

        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1 class="entry-title"><?php echo $value['title']; ?></h1>

                            <!-- <div class="ratings flex justify-content-center align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(4 votes)</span>
                            </div>.ratings -->
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

    <div class="container">
        <div class="row">
            <div class="col-12 offset-lg-1 col-lg-10">
                <div class="featured-image">
                    <img src="../images/<?php echo $value['photo']; ?>" alt="">

                    <div class="course-cost">Free</div>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12 offset-lg-1 col-lg-1">
                <div class="post-share">
                    <h3>share</h3>

                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-thumb-tack"></i></a></li>
                    </ul>
                </div><!-- .post-share -->
            </div><!-- .col -->

            <div class="col-12 col-lg-8">
                <div class="single-course-wrap">
                    <div class="course-info flex flex-wrap align-items-center">
                        <div class="course-author flex flex-wrap align-items-center mt-3">
                            <img src="../images/emir.jpg" alt="">

                            <div class="author-wrap">
                                <label class="m-0">Teacher</label>
                                <div class="author-name"><a href="#"><?= $value['author'] ?></a></div>
                            </div><!-- .author-wrap -->
                        </div><!-- .course-author -->

                        <div class="course-cats mt-3">
                            <label class="m-0">Categories</label>
                            <div class="author-name"><a href="#">Alpro</a></div>
                        </div><!-- .course-cats -->

                        <div class="course-students mt-3">
                            <label class="m-0">Passed Lectures</label>
                            <div class="author-name"><a href="#">0</a></div>
                        </div><!-- .course-students -->

                        <div class="course-students mt-3">
                            <label class="m-0">Score</label>
                            <div class="author-name"><a href="#">0</a></div>
                        </div><!-- .course-students -->
                    </div><!-- .course-info -->

                    

                    <div class="single-course-accordion-cont mt-3">
                        <header class="entry-header flex flex-wrap justify-content-between align-items-center">
                            <h2>Curriculum For This Course</h2>

                            
                        </header><!-- .entry-header -->

                        <div class="entry-contents">
                            <div class="accordion-wrap type-accordion">
                                <?php
                                    $sql = $db->query("select * from curriculum where course_id = $id");
                                    while($cur = $sql->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                <h3 class="entry-title flex flex-wrap justify-content-between align-items-lg-center active">
                                    <span class="arrow-r"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                                    <span class="lecture-group-title"><?php echo $cur['title'] ?></span>
                                    <span class="number-of-lectures"></span>
                                    <span class="total-lectures-time"></span>
                                </h3>
                                        
                                <div class="entry-content">
                                    <ul class="p-0 m-0">
                                        <?php
                                        $idt = $cur['id_cur'];
                                            $sql2 = $db->query("select * from materi where curriculum_id = $idt");
                                            while($materi = $sql2->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                        <li class="flex flex-column flex-lg-row align-items-lg-center"><span class="lecture-title"><?php echo $materi['title'] ?></span><span class="lectures-preview"></span><span class="lectures-time text-left text-lg-right"></span></li>
                                            <?php } ?>
                                    </ul>
                                </div>
                                    <?php } ?>
                                
                            </div>
                        </div><!-- .entry-contents -->
                    </div><!-- .single-course-accordion-cont  -->

                    
                </div><!-- .single-course-wrap -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

  <?php include("partials/logo.php") ?>

  <?php include("partials/footer"); ?>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>
