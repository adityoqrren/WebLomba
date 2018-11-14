<!DOCTYPE html>
<html lang="en">
<?php include("partials/head.php");
    include("../config.php")
?>
<body class="courses-page">
    <div class="page-header">
      <?php include("partials/navcourses.php") ?>
        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1>Courses Online</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

    <div class="container courses">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs">
                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li>Courses</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="featured-courses courses-wrap">
                    <div class="row mx-m-25">
                    <?php
                                    $sql = $db->query("select * from course");
                                    while ($value = $sql->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                        <div class="col-12 col-md-4 px-25">
                            <div class="course-content">
                                <figure class="course-thumbnail">
                                    <a href="<?php echo $value['title']; ?>.php?id=<?=$value['id_course']?>"><img src="<?php echo "../images/".$value['photo']; ?>" alt=""></a>
                                </figure><!-- .course-thumbnail -->

                                <div class="course-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php echo $value['title']; ?>.php?id=<?=$value['id_course']?>"><?php echo $value['title']; ?></a></h2>

                                        <div class="entry-meta flex flex-wrap align-items-center">
                                            <div class="course-author"><a href="#"> <?php echo $value['author']; ?></a></div>

                                            <div class="course-date"><?php echo $value['create_date']; ?></div>
                                        </div><!-- .course-date -->
                                    </header><!-- .entry-header -->

                                  <!--  <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                                        <div class="course-cost">
                                            $45 <span class="price-drop">$68</span>
                                        </div><!-- .course-cost -->

                                        <div class="course-ratings flex justify-content-end align-items-center">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>

                                            <span class="course-ratings-count">(4 votes)</span>
                                        </div><!-- .course-ratings -->
                                    </footer><!-- .entry-footer -->
                                </div><!-- .course-content-wrap -->
                            </div><!-- .course-content -->
                        </div><!-- .col -->
                                    <?php } ?>

                    </div><!-- .row -->
                </div><!-- .featured-courses -->

                <div class="pagination flex flex-wrap justify-content-between align-items-center">
                    <div class="col-12 col-lg-4 order-2 order-lg-1 mt-3 mt-lg-0">
                        <ul class="flex flex-wrap align-items-center order-2 order-lg-1 p-0 m-0">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-12 flex justify-content-start justify-content-lg-end col-lg-8 order-1 order-lg-2">
                        <div class="pagination-results flex flex-wrap align-items-center">
                            <p class="m-0">Showing 1–3 of 12 results</p>

                            <form>
                                <select>
                                    <option>Show: 06</option>
                                    <option>Show: 12</option>
                                    <option>Show: 18</option>
                                    <option>Show: 24</option>
                                </select>
                            </form>
                        </div><!-- .pagination-results -->
                    </div>
                </div><!-- .pagination -->
            </div><!-- .col -->

        </div><!-- .row -->
    </div><!-- .container -->

  <?php include("partials/logo.php") ?>
  <?php include("partials/footer.php") ?>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>
