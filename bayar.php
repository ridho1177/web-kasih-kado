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
    <title>Checkout</title>
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

<?php
    
    $data_user = mysqli_query($con, "SELECT * FROM barang WHERE id_barang= ".$_GET['idproduk']."");

$record= mysqli_fetch_array($data_user);

$harga= $record["harga_brg"];
?>
				
        <!-- Start Checkout -->

		<section class="shop checkout section mt-5" style="margin-top: 150px !important;">
			<div class="container ">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
                            <h2>KONFIRMASI PEMBAYARAN</h2>

							<p>Mohon isi data berikut dengan benar.</p>
                            <!-- Form -->
                            
							<form class="form" method="post">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Nama Lengkap<span>*</span></label>
											<input type="text" name="nama" placeholder="" required="required">
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Bank<span>*</span></label>
											<select name="bank" class="form-control">
												<option value="divition" selected="selected">Pilih Bank</option>
												<option >BRI</option>
												<option>Mandiri</option>
                                                <option>BCA</option>
                                                <option>BNI</option>
                                                <option>BPD</option>
                                                <option>DANAMON</option>
												<option>PERMATA</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>No Rekening<span>*</span></label>
											<input type="text" name="no_rek" placeholder="" required="required">
										</div>
									</div>

								</div>
							
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
										<li>Sub Total<span><?php echo "Rp ".number_format($harga,0,",","."); ?></span></li>
										<li>(+) Ongkir<span>Rp 0</span></li>
										<li class="last">Total<span><?php echo "Rp ".number_format($harga,0,",","."); ?></span></li>
									</ul>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Metode Pembayaran</h2>
								<div class="content">
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
										<button class="btn" type="submit" name="bayar">konfirmasi</button>
									</div>
								</div>
                            </div>
                        </form>
							<!--/ End Button Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->
		
        
        <?php 
        include ("footerLogin.php");
        ?>
        

        <?php
            if (isset($_POST['bayar'])) { 

                $nama = $_POST['nama'];
                $bank = $_POST['bank'];  
                $norek = $_POST['no_rek'];


                            //$sql= "INSERT INTO `transaksi` ( `nama_penerima`,`total_harga`, `jml_barang`, `alamat_kirim`, `pengiriman`, `tgl_transaksi`, `id_barang`, `id_user`, `status_transaksi`) VALUES ( 'ridho','100000', '1', 'jogja', '".$kurir."', '".$tgl."', '10', '".$_SESSION["id_user"]."', 'Belum Bayar')";

                            //$sql = "INSERT INTO `transaksi` ( `nama_penerima`,`total_harga`, `jml_barang`, `alamat_kirim`, `pengiriman`, `tgl_transaksi`, `id_barang`, `id_user`, `status_transaksi`) VALUES ( '".$nama."','".$harga."', '1', '".$alamat."', '".$kurir."', '".$tgl."', '".$barang."', '".$_SESSION["id_user"]."', 'Belum Bayar')";

                            $sql = "INSERT INTO `pembayaran` (`id_pembayaran`, `bank`, `status_pembayaran`, `no_rek`, `id_user`, `total_pembayaran`, `Nama Rekening`) VALUES (NULL, '".$bank."', 'Menunggu Konfriamsi', '".$norek."', '".$id_user."', '$harga', '".$nama."')";
                            //eksekusi query
                            $hasil=mysqli_query($con,$sql) ;
            ?>

            <script>
                alert("Konfrimasi Berhasil");
                window.location='homeLogin.php';
            </script>

            <?php
            }
                // }else{
                //     echo '<script language="javascript">
                //     alert ("Gagal");
                //     window.location="keranjang.php";
                //     </script>';
                //     exit();
                // }
            ?>

	<!-- Jquery -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/jquery-migrate-3.0.0.js"></script>
	<script src="public/js/jquery-ui.min.js"></script> 
</body>
</html>