<?php $conn=mysqli_connect('localhost','root','','asisten_lab_tmums'); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Laboratorium di Teknik Mesin UMS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
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
                        <h2>Reservasi</h2>
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="portfolio.html">Reservasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area pb-0">
        <div class="container">
            <div class="main_title">
                <h2>Reservasi Laboratorium</h2>
                <p>Hubungi Asisten Laboratorium Melalui Whatsapp Untuk Reservasi / Pemesanan Laboratorium</p>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_post">
                                <div class="blog_details">
                                    <center>
                                        <img src="img/history/result/lab komputer.png" alt="">
                                        <a>
                                            <h2>Lab. Komputer</h2>
                                        </a>
                                        <?php
                                            $get_contact_asstn = mysqli_query($conn,
                                            "SELECT * FROM asistent where position_lab ='Komputer' LIMIT 1"
                                            );
                                            while ($p = mysqli_fetch_array($get_contact_asstn)) {
                                                $id_asistent = $p['id_asistent'];
                                                $name = $p['name'];
                                                $telp = $p['telp'];
                                        ?> 
                                        <a href="https://wa.me/<?= $telp; ?>" target="_blank" class="genric-btn info circle arrow">Hubungi<span class="fa fa-whatsapp"></span></a>
                                        <?php } ?>
                                        <?php if (mysqli_num_rows($get_contact_asstn) > 0) { ?>
                                        <?php } else {
                                            echo "
                                            <br><h4><span class='fa fa-info-circle text-danger'> Maaf belum ada asisten yang dapat dihubungi saat ini.</span></h4><br>";
                                        } ?>
                                    </center>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_post">
                                <div class="blog_details">
                                    <center>
                                        <img src="img/history/result/lab metalurgi.png" alt="">
                                        <a>
                                            <h2>Lab. Metalurgi</h2>
                                        </a>
                                        <?php
                                            $get_contact_asstn = mysqli_query($conn,
                                            "SELECT * FROM asistent where position_lab ='Metalurgi' LIMIT 1"
                                            );
                                            while ($p = mysqli_fetch_array($get_contact_asstn)) {
                                                $id_asistent = $p['id_asistent'];
                                                $name = $p['name'];
                                                $telp = $p['telp'];
                                        ?> 
                                        <a href="https://wa.me/<?= $telp; ?>" target="_blank" class="genric-btn info circle arrow">Hubungi<span class="fa fa-whatsapp"></span></a>
                                        <?php } ?>
                                        <?php if (mysqli_num_rows($get_contact_asstn) > 0) { ?>
                                        <?php } else {
                                            echo "
                                            <br><h4><span class='fa fa-info-circle text-danger'> Maaf belum ada asisten yang dapat dihubungi saat ini.</span></h4><br>";
                                        } ?>
                                    </center>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_post">
                                <div class="blog_details">
                                    <center>
                                        <img src="img/history/result/lab thermodinamika.png" alt="">
                                        <a>
                                            <h2>Lab. Thermodinamika</h2>
                                        </a>
                                        <?php
                                            $get_contact_asstn = mysqli_query($conn,
                                            "SELECT * FROM asistent where position_lab ='Thermodinamika' LIMIT 1"
                                            );
                                            while ($p = mysqli_fetch_array($get_contact_asstn)) {
                                                $id_asistent = $p['id_asistent'];
                                                $name = $p['name'];
                                                $telp = $p['telp'];
                                        ?> 
                                        <a href="https://wa.me/<?= $telp; ?>" target="_blank" class="genric-btn info circle arrow">Hubungi<span class="fa fa-whatsapp"></span></a>
                                        <?php } ?>
                                        <?php if (mysqli_num_rows($get_contact_asstn) > 0) { ?>
                                        <?php } else {
                                            echo "
                                            <br><h4><span class='fa fa-info-circle text-danger'> Maaf belum ada asisten yang dapat dihubungi saat ini.</span></h4><br>";
                                        } ?>
                                    </center>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_post">
                                <div class="blog_details">
                                    <center>
                                        <img src="img/history/result/lab manufaktur.png" alt="">
                                        <a>
                                            <h2>Lab. Manufaktur / Produksi</h2>
                                        </a>
                                        <?php
                                            $get_contact_asstn = mysqli_query($conn,
                                            "SELECT * FROM asistent where position_lab ='Manufaktur' LIMIT 1"
                                            );
                                            while ($p = mysqli_fetch_array($get_contact_asstn)) {
                                                $id_asistent = $p['id_asistent'];
                                                $name = $p['name'];
                                                $telp = $p['telp'];
                                        ?> 
                                        <a href="https://wa.me/<?= $telp; ?>" target="_blank" class="genric-btn info circle arrow">Hubungi<span class="fa fa-whatsapp"></span></a>
                                        <?php } ?>
                                        <?php if (mysqli_num_rows($get_contact_asstn) > 0) { ?>
                                        <?php } else {
                                            echo "
                                            <br><h4><span class='fa fa-info-circle text-danger'> Maaf belum ada asisten yang dapat dihubungi saat ini.</span></h4><br>";
                                        } ?>
                                    </center>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_post">
                                <div class="blog_details">
                                    <center>
                                        <img src="img/history/result/lab perpindahan kalor.png" alt="">
                                        <a>
                                            <h2>Lab. Perpindahan Kalor</h2>
                                        </a>
                                        <?php
                                            $get_contact_asstn = mysqli_query($conn,
                                            "SELECT * FROM asistent where position_lab = 'Perpindahan Kalor' LIMIT 1"
                                            );
                                            while ($p = mysqli_fetch_array($get_contact_asstn)) {
                                                $id_asistent = $p['id_asistent'];
                                                $name = $p['name'];
                                                $telp = $p['telp'];
                                        ?> 
                                        <a href="https://wa.me/<?= $telp; ?>" target="_blank" class="genric-btn info circle arrow">Hubungi<span class="fa fa-whatsapp"></span></a>
                                        <?php } ?>
                                        <?php if (mysqli_num_rows($get_contact_asstn) > 0) { ?>
                                        <?php } else {
                                            echo "
                                            <br><h4><span class='fa fa-info-circle text-danger'> Maaf belum ada asisten yang dapat dihubungi saat ini.</span></h4><br>";
                                        } ?>
                                    </center>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_post">
                                <div class="blog_details">
                                    <center>
                                        <img src="img/history/result/lab mekanika fluida.png" alt="">
                                        <a>
                                            <h2>Lab. Mekanika Fluida</h2>
                                        </a>
                                        <?php
                                            $get_contact_asstn = mysqli_query($conn,
                                            "SELECT * FROM asistent where position_lab = 'Mekanika Fluida' LIMIT 1"
                                            );
                                            while ($p = mysqli_fetch_array($get_contact_asstn)) {
                                                $id_asistent = $p['id_asistent'];
                                                $name = $p['name'];
                                                $telp = $p['telp'];
                                        ?> 
                                        <a href="https://wa.me/<?= $telp; ?>" target="_blank" class="genric-btn info circle arrow">Hubungi<span class="fa fa-whatsapp"></span></a>
                                        <?php } ?>
                                        <?php if (mysqli_num_rows($get_contact_asstn) > 0) { ?>
                                        <?php } else {
                                            echo "
                                            <br><h4><span class='fa fa-info-circle text-danger'> Maaf belum ada asisten yang dapat dihubungi saat ini.</span></h4><br>";
                                        } ?>
                                    </center>
                                </div>
                            </div> 
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!--================Footer Area =================-->
    <?php include "layout/footer.php";  ?>
    <!--================End Footer Area =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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