<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Contact Us</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="public/css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="public/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="public/css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="public/css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="public/css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="public/css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="public/css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="public/css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="public/css/reset.css">
	<link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="public/css/responsive.css">

	
	
</head>
<body class="js">

<?php 
require_once("koneksi.php");
?>

    <?php 
    include ("header.php");
    ?>

	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section mt-5">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Contact Us</h4>
									<h3>Silahkan tuliskan pesan Anda</h3>
								</div>
								<form class="form" method="post">
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Nama<span>*</span></label>
												<input name="nama" type="text" placeholder="" required>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Keterangan<span>*</span></label>
												<input name="ket" type="text" placeholder="" required>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Email<span>*</span></label>
												<input name="email" type="email" placeholder="" required>
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>No Telepon</label>
												<input name="no_hp" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Pesan<span>*</span></label>
												<textarea name="isi_pesan" placeholder="" required></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn" name="kirim">Kirim Pesan</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Hub kami di:</h4>
									<ul>
										<li>+0821-7227-1233</li>
										<li>+0857-2123-3432</li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email:</h4>
									<ul>
										<li><a href="mailto:info@yourwebsite.com">info@kasihkado.com</a></li>
										<li><a href="mailto:info@yourwebsite.com">support@kasihkado.com</a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Alamat:</h4>
									<ul>
										<li>Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->
	
<?php 
include ("footer.php");
?>
    
    
    <?php

    if (isset($_POST['kirim'])) { 

        $nama = $_POST['nama'];
        $ket = $_POST['ket'];
        $email = $_POST['email'];   
        $no_hp = $_POST['no_hp'];
        $isi_pesan = $_POST['isi_pesan'];                 
                    $sql= "INSERT INTO `pesan` (`id_pesan`, `nama_pengirim`, `ket`, `email`, `no_hp`, `isi_pesan`) VALUES (NULL, '".$nama."', '".$ket."', '".$email."', '".$no_hp."', '".$isi_pesan."')";

                    //eksekusi query
                    $hasil=mysqli_query($con,$sql) ;
    ?>

    <script>
        alert("pesan berhasil dikirim");
        window.location='contactus.php';
    </script>

    <?php
        }
    ?>
	
	<!-- Jquery -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/jquery-migrate-3.0.0.js"></script>
	<script src="public/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="public/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="public/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="public/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="public/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="public/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="public/js/magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="public/js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="public/js/waypoints.min.js"></script>
	<!-- Jquery Counterup JS -->
	<script src="public/js/jquery-counterup.min.js"></script>
	<!-- Countdown JS -->
	<script src="public/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="public/js/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="public/js/ytplayer.min.js"></script>
	<!-- Flex Slider JS -->
	<script src="public/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="public/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="public/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="public/js/easing.js"></script>
	<!-- Google Map JS -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>	
	<script src="public/js/gmap.min.js"></script>
	<script src="public/js/map-script.js"></script>
	<!-- Active JS -->
	<script src="public/js/active.js"></script>
</body>
</html>