<?php
    $conn=mysqli_connect('localhost','root','','asisten_lab_tmums');
    $data_asisten = mysqli_query($conn, "SELECT * FROM asistent");
    $jumlah_asisten = mysqli_num_rows($data_asisten);
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Lab.Teknik Mesin UMS</title>
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
        <section class="home_banner_area">
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex pl-0">
								<img src="img/logo.jpg" height="500" width="500" alt="">
							</div>
							<div class="media-body pl-0">
								<div class="personal_text">
									<h3>Asisten Laboratorium Teknik Mesin</h3>
									<h4>Universitas Muhammadiyah Surakarta</h4>
									<p>
										Asisten Laboratorium Teknik Mesin Universitas Muhammadiyah Surakarta adalah tim yang berdedikasi untuk mendukung eksplorasi ilmiah, inovasi, dan pembelajaran praktis dalam disiplin teknik mesin. Dengan semangat kolaboratif, kami berkomitmen untuk memfasilitasi mahasiswa, menyediakan bantuan teknis yang terpercaya, dan menjaga standar keunggulan dalam setiap aspek pengembangan laboratorium dan eksperimen di lingkungan kami.
									</p>
									<ul class="list basic_info">
										<li><a href="https://www.ums.ac.id/" target="_blank"><i class="lnr lnr-apartment"></i> Universitas Muhammadiyah Surakarta</a></li>
										<li><a href="https://www.instagram.com/labtmesin.ums/" target="_blank"><i class="fa fa-instagram"></i> @labtmesin.ums</a></li>
										<li><a href="mailto:laboratoriumteknikmesinums@gmail.com" target="_blank"><i class="lnr lnr-envelope"></i> laboratoriumteknikmesinums@gmail.com</a></li>
									</ul>
									<ul class="list personal_social">
										<li><a href="https://tm.ums.ac.id/" target="_blank"><i class="fa fa-link"></i></a></li>
										<li><a href="https://www.youtube.com/@proditeknikmesinums5072" target="_blank"><i class="fa fa-youtube"></i></a></li>
										<li><a href="https://www.instagram.com/labtmesin.ums/" target="_blank"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://twitter.com/teknik_ums" target="_blank"><i class="fa fa-twitter"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_100 mt-0">
        	<div class="container">
        		<div class="welcome_inner">
					<div class="welcome_text">
						<div class="row">
							<div class="col-md-4">
								<a href="https://tm.ums.ac.id/tata-pamong/" target="_blank">
									<div class="wel_item">
										<i class="fa fa-users"></i>
										<h4>8</h4>
										<p>Total Dosen / Tata Pamong</p>
									</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="asisten.php">
									<div class="wel_item">
										<i class="lnr lnr-user"></i>
										<h4><?= $jumlah_asisten ?></h4>
										<p>Total Asisten Laboratorium</p>
									</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="history.php">
									<div class="wel_item">
										<i class="lnr lnr-construction"></i>
										<h4>8</h4>
										<p>Total Laboratorium</p>
									</div>
								</a>
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section><hr><br>
        <!--================End Welcome Area =================-->
        
        <!--================Home Gallery Area =================-->
        <section class="home_gallery_area p_120 pt-3">
        	<div class="container">
        		<div class="main_title">
        			<h2>Galery</h2>
        			<p>Beberapa foto dari Laboratorium Teknik Mesin UMS</p>
        		</div>
        		<div class="isotope_fillter">
        			<ul class="gallery_filter list">
						<li class="active" data-filter="*"><a href="#">All</a></li>
						<li data-filter=".foto"><a href="#">Foto</a></li>
						<li data-filter=".poster"><a href="#">Poster</a></li>
					</ul>
        		</div>
        	</div>
        	<div class="container">
        		<div class="gallery_f_inner row imageGallery1">
        			<div class="col-lg-4 col-md-4 col-sm-6 foto">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/foto/lab komputer.png" alt="">
        						<a class="light" href="img/history/komputer.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Ruang Lab. Komputer</h4>
        						<p>Lab. Komputer</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 foto">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
								<img class="img-fluid" src="img/gallery/foto/printer 3d.png" alt="">
        						<a class="light" href="img/gallery/foto/sampel/printer 3d.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Printer 3d</h4>
        						<p>Lab. Komputer</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 foto">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
								<img class="img-fluid" src="img/gallery/foto/metallografi unit.png" alt="">
        						<a class="light" href="img/gallery/foto/sampel/metallografi unit.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Metallografi Unit</h4>
        						<p>Lab. Metalurgi</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 foto">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
								<img class="img-fluid" src="img/gallery/foto/Engine-Test-Bed-Mesin-Bensin.png" alt="">
        						<a class="light" href="img/gallery/foto/sampel/Engine-Test-Bed-Mesin-Bensin.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Engine Test Bed Mesin Bensin</h4>
        						<p>Lab. Thermodinamika</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 foto">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
								<img class="img-fluid" src="img/gallery/foto/Mesin-Bubut-CNC-TU2A.png" alt="">
        						<a class="light" href="img/gallery/foto/sampel/Mesin-Bubut-CNC-TU2A.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Mesin Bubut CNC TU2A</h4>
        						<p>Lab. Manufaktur / Produksi</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 foto">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
								<img class="img-fluid" src="img/gallery/foto/lab perpindahan kalor.png" alt="">
        						<a class="light" href="img/gallery/foto/sampel/perpindahan kalor.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Alat Uji Perpindahan Kalor & Massa</h4>
        						<p>Lab. Perpindahan Kalor</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 foto">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
								<img class="img-fluid" src="img/gallery/foto/Alat Uji Gesekan Pipa.png" alt="">
        						<a class="light" href="img/gallery/foto/sampel/Alat Uji Gesekan Pipa.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Alat Uji Gesekan Pipa</h4>
        						<p>Lab. Mekanika Fluida</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 foto">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
								<img class="img-fluid" src="img/gallery/foto/Alat Pelengkungan Batang.png" alt="">
        						<a class="light" href="img/gallery/foto/sampel/Alat Pelengkungan Batang.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Alat Pelengkungan Batang</h4>
        						<p>Lab. Pengembangan Ilmu Teknik Dasar</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 foto">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
								<img class="img-fluid" src="img/gallery/foto/Wind Tunnel.png" alt="">
        						<a class="light" href="img/gallery/foto/sampel/Wind Tunnelg.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Wind Tunnel</h4>
        						<p>Lab. Aerodinamika</p>
        					</div>
        				</div>
        			</div>
				</div>
					
					<!-- ---------poster--------- -->

				<div class="gallery_f_inner row imageGallery1 mt-5">
        			<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 1.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 1.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Scanning Electron Microscopy</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 2.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 2.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Struktur Mikro Metalografi</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 3.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 3.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Mufle Finance</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 4.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 4.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Mettal Cutting</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 5.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 5.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Impact Charpy</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 6.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 6.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Mounting Press</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 7.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 7.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Auto Polish Machine</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 8.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 8.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Rockwell Hardness</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 9.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 9.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Plasma Cutting</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 10.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 10.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Universal Testing Machine</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 11.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 11.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>CNC Router</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 12.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 12.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Dynotest</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-4 col-md-4 col-sm-6 poster">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/poster/poster 13.jpg" alt="">
        						<a class="light" href="img/gallery/poster/poster 13.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Portable Measureing Arm</h4>
        						<p>Brosur Lab. Teknik Mesin</p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
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