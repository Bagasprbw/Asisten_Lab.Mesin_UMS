<?php
    $conn=mysqli_connect('localhost','root','','asisten_lab_tmums');
    $query = "SELECT * FROM asistent";
    $data_asistent = mysqli_query($conn,$query);
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Asisten Lab Teknik Mesin UMS</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <?php include "layout/sidebar.php"; ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2>Asisten Laboratorium</h2>
							<div class="page_link">
								<a href="index.html">Home</a>
								<a href="about-us.html">Asisten Laboratorium</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        
        <!--================Home Banner Area =================-->
        <section class="profile_area">
           	<div class="container">
           		<div class="profile_inner p_120">
                    <?php foreach ($data_asistent as $asistent){ ?>
                    <div class="row mb-5">
                        <div class="col-lg-4 pl-5">
                            <?php
                            $photoPath = (!empty($asistent['photo'])) ? "img/asisten/" . $asistent['photo'] : "img/asisten/default_pfp.png";
                            ?>
                            <img src="<?= $photoPath; ?>" height="300" width="290" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="personal_text">
                                <h2><?= $asistent['name']; ?> <span>(<?= $asistent['nim']; ?>)</span></h2>
                                <h4>Asisten Lab. <?= $asistent['position_lab']; ?></h4>
                                <ul class="list basic_info">
                                    <li><a href="#"><i class="fa fa-calendar"></i> <?= $asistent['date_of_birth']; ?></a></li>

                                    <li><a href="https://wa.me/<?= $asistent['telp']; ?>" target="_blank"><i class="fa fa-phone"></i> <?= $asistent['telp']; ?></a></li>

                                    <li><a href="mailto:<?= $asistent['email']; ?>?subject=Pertanyaan&body=Halo%20Asisten,%0A%0A" target="_blank"><i class="fa fa-envelope"></i> <?= $asistent['email']; ?></a></li>

                                    <li><a href="https://www.instagram.com/<?= $asistent['instagram']; ?>/" target="_blank"><i class="fa fa-instagram"></i> @<?= $asistent['instagram']; ?></a></li>
                                </ul>
                                <ul class="list personal_social">
                                    <li><a href="https://www.instagram.com/<?= $asistent['instagram']; ?>/" target="_blank"><i class="fa fa-instagram"></i></a></li>

                                    <li><a href="https://wa.me/<?= $asistent['telp']; ?>" target="_blank"><i class="fa fa-whatsapp"></i></a></li>

                                    <li><a href="mailto:<?= $asistent['email']; ?>?subject=Pertanyaan&body=Halo%20Asisten,%0A%0A" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><hr><br>
                    <?php }?>
           		</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Footer Area =================-->
        <?php include "layout/footer.php" ?>
        <!--================End Footer Area =================-->
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>