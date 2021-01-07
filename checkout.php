<?php
require_once ("koneksi.php");
session_start();

if (!isset($_SESSION["username"])) {
	echo "<script>alert('session berakhir !!!'); window.location.href='home.php'</script>";
	exit;
}

$id_user=$_SESSION["id_user"];
$username=$_SESSION["username"];
$nama=$_SESSION["nama"];
$email=$_SESSION["email"];

?>

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
    <title>Menu-Checkout</title>
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
include ("headerLogin.php");
?>
				
        <!-- Start Checkout -->
		<section class="shop checkout section mt-5" style="margin-top: 150px !important;">
			<div class="container ">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>CHECKOUT PESANAN</h2>
							<p>Mohon isi data berikut dengan benar.</p>
							<!-- Form -->
							<form class="form" method="post" action="#">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Nama Depan<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Nama Belakang<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Email<span>*</span></label>
											<input type="email" name="email" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Nomor Telepon<span>*</span></label>
											<input type="text" name="number" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Provinsi<span>*</span></label>
											<select name="country_name" id="country">
												<option value="AF">Aceh</option>
												<option value="AX">Bengkulu</option>

											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Kota/Kabupaten<span>*</span></label>
											<select name="state-province" id="state-province">
												<option value="divition" selected="selected">Pilih Kota/Kabupaten</option>
												<option>Sleman</option>
												<option>Yogyakarta</option>
												<option>Jakarta Selatan</option>
												<option>Pontianak</option>
												<option>Surabaya</option>
												<option>Semarang</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Alamat Lengkap<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Kode Pos<span>*</span></label>
											<input type="text" name="post" placeholder="" required="required">
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Metode Pengiriman<span>*</span></label>
											<select name="state-province" id="state-province">
												<option value="divition" selected="selected">Pilih Kurir</option>
												<option>JNE</option>
												<option>J&T</option>
												<option>POS</option>
											</select>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>TOTAL BELANJA</h2>
								<div class="content">
									<ul>
										<li>Sub Total<span>$330.00</span></li>
										<li>(+) Diskon<span>$10.00</span></li>
										<li class="last">Total<span>$340.00</span></li>
									</ul>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Metode Pembayaran</h2>
								<div class="content">
									<div class="checkbox">
										<label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Alfamart</label>
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Transfer Bank</label>
										<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox"> Dana</label>
									</div>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Payment Method Widget -->
							<div class="single-widget payement">
								<div class="content">
									<img src="public/images/bankTF.png" alt="#">
								</div>
							</div>
							<!--/ End Payment Method Widget -->
							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">
										<a href="#" class="btn">checkout</a>
									</div>
								</div>
							</div>
							<!--/ End Button Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->
		
        
        <?php 
        include ("footer.php");
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
	<!-- Active JS -->
	<script src="public/js/active.js"></script>
</body>
</html>