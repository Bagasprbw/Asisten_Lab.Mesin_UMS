<?php
    $conn=mysqli_connect('localhost','root','','asisten_lab_tmums');
    $query = "SELECT * FROM asistent where position_lab = 'Perpindahan Kalor'";
    $data_asistent = mysqli_query($conn,$query);
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../img/favicon.png" type="image/png">
        <title>Lab. Perpindahan Kalor</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/animate-css/animate.css">
        <link rel="stylesheet" href="../vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area for detail directory =================-->
        <?php include "sidebar.php"; ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2>Detail History</h2>
							<div class="page_link">
								<a href="../index.php">Home</a>
								<a href="../history.php">History</a>
								<a href="">Detail History</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="../img/history/result/lab perpindahan kalor.png" alt="">
                                </div>									
                            </div>
                            <div class="col-lg-12 col-md-9 blog_details">
                                <h2>Laboratorium Perpindahan Kalor</h2>
                                <p class="excert">
                                    Laboratorium Perpindahan Kalor adalah laboratorium untuk mengamati memberikan gambaran secara konveksi antara dua fluida, yaitu antara air panas dengan udara. Dengan percobaan ini praktikan akan dapat mengetahui parameter - parameter yang berpengaruh pada laju perpindahan kalor konveksi dalam pipa,secara paralel flow dan contra flow.
                                </p>
                                <p>
                                    Materi praktikum ini terfokus pada Perpindahan Kalor meliputi:
                                    <ol>
                                        <li>Perpindahan Kalor dan Massa</li>
                                        <li>Perpindahan Kalor dan Massa lanjut</li>
                                        <li>Alat Penukar Kalor</li>
                                    </ol>
                                </p>
                                <p>
                                    Praktikum dilaksanakan pada semester 6 dengan syarat lulus matakuliah Perpindahan kalor & massa dan Perpindahan kalor & massa lanjut.
                                </p>
                            </div>
                            <!-- Asisten Lab -->
                            <div class="col-lg-12">
                                <div class="quotes"><hr>
                                    <bold>Asisten :</bold>
                                    <ul>
                                        <?php if (mysqli_num_rows($data_asistent) > 0) { ?>
                                        <?php } else {
                                            echo "
                                            <p class='text-danger'>Belum ada asiten saat ini !</p>";
                                        } ?>
                                        <?php foreach ($data_asistent as $asistent){ ?>
                                            <li><?= $asistent['name'] ?> (<?= $asistent['nim'] ?>)</li>
                                        <?php } ?>
                                    </ul>
                                    <p><hr></p>								
                                </div>
                                <div class="row mb-4">
                                    <div class="col-10 mb-4">
                                        <img class="img-fluid" src="../img/history/detail/perpindahan kalor.png" alt="">
                                    </div>				
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6 mb-4">
                                        <a href="https://tm.ums.ac.id/laboratorium-produksi/" target="_blank"><u class="text-info">Show more →</u></a>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <h3 class="text-center">Asisten Lab</h3>
                                <div class="br"></div>
                            </aside>
                            <?php if(mysqli_num_rows($data_asistent) == 0) {
                                echo"
                                <div class='alert alert-danger d-flex align-items-center' role='alert'>
                                    <span class='fa fa-info-circle text-danger'> Maaf belum ada asisten saat ini.</span>
                                </div>
                                ";
                            } ?>
                            <?php foreach ($data_asistent as $asistent){ ?>
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" height="100" width="100" src="../img/asisten/<?= $asistent['photo']; ?>" alt="">
                                <h4><?= $asistent['name']; ?></h4>
                                <p>Asisten Lab. <?= $asistent['position_lab']; ?></p>
                                <div class="social_icon">
                                    <a href="https://wa.me/<?= $asistent['telp']; ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>

                                    <a href="mailto:<?= $asistent['email']; ?>?subject=Pertanyaan&body=Halo%20Asisten,%0A%0A" target="_blank"><i class="fa fa-envelope"></i></a>

                                    <a href="https://www.instagram.com/<?= $asistent['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        
        <!--================Footer Area =================-->
        <?php include "../layout/footer.php";  ?>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/stellar.js"></script>
        <script src="../vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="../vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="../vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="../vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="../js/jquery.ajaxchimp.min.js"></script>
        <script src="../vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="../vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="../js/mail-script.js"></script>
        <script src="../js/theme.js"></script>
    </body>
</html>