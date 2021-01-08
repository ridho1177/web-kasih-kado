<?php
require_once ("koneksi.php");
session_start();

if (!isset($_SESSION["username"])) {
   echo "<script>alert('session berakhir !!!'); window.location.href='home.php'</script>";
  exit;
}
?>

<html lang="en">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Kasihkado</title>
	<!-- Favicon -->
	<link rel="icon" type="public/image/png" href="public/images/favicon.png">
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

    <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- MDB eCommerce core CSS -->
  <link rel="stylesheet" href="css/mdb-ecommerce.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

	
</head>
<body>
<!--Section: Block Content-->
<?php 
	include "headerLogin.php";
	?>
<section>

  <!--Grid row-->
  <div class="row justify-content-center">

    <!--Grid column-->
    <div class="col-lg-8 ">
    <br><br><br><br><br><br><br>
      <!-- Card -->
      <div class="card wish-list mb-3">
        <div class="card-body">
        <h5 class="mb-4">Cart (<span><?php echo count($_SESSION['cart']); ?></span> items)</h5>
        <?php
        $total = 0;
            if(!empty($_SESSION['cart'])){
            //connection
            
            //create array of initail qty which is 1
            $index = 0;
            if(!isset($_SESSION['qty_array'])){
              $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
            }
            $sql = "SELECT * FROM barang WHERE id_barang IN (".implode(',',$_SESSION['cart']).")";
            $query = $con->query($sql);
              while($row = $query->fetch_assoc()){
            ?>

          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="public/images/product/<?=$row['foto']?>">
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5><?php echo $row['nama_barang']; ?></h5>
                    <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                    <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                    <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                    <p class="mb-3 text-muted text-uppercase small">Harga:<?php echo number_format($row['harga_brg'], 2); ?> </p>
                  </div>
                  <div>
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                        class="minus"></button>
                        <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                      <input  min="1" class="form-control" name="qty_<?php echo $index; ?>" value="<?php echo $_SESSION['qty_array'][$index]; ?>" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                        class="plus"></button>
                    </div>
                    <small id="passwordHelpBlock" class="form-text text-muted text-center">
                      (Note, 1 piece)
                    </small>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="delete_item.php?id=<?php echo $row['id_barang']; ?>&index=<?php echo $index; ?>" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                        class="fas fa-trash-alt mr-1"></i> Remove item </a>
                  </div>
                  <p class="mb-0"><span><strong><?php echo number_format($_SESSION['qty_array'][$index]*$row['harga_brg'], 2); ?></strong></span></p>
                </div>
              </div>
            </div>
          </div>
           <?php
                $total += $_SESSION['qty_array'][$index]*$row['harga_brg'];
                $index ++;
              }
            }
           ?>
           </div>
         </div>
            </div>
          </div>

        </div>
      </div>

    </div>
    <!--Grid column-->
    <?php 
      $jmlBrg = count($_SESSION['cart']);
     if($jmlBrg>0){
    ?>
    <center>
    <div class="col-lg-3 mb-5" style="margin-top: -120px;">
      <!-- Card -->
      <br><br><br><br><br><br><br>
      <div class="card lg-3">
        <div class="card-body">

          <h5 class="mb-3">Total Harga</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-center align-items-center border-0 px-0 pb-0">
              
              <span> Total Biaya : Rp <?php echo number_format($total, 2); ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
              <span><strong>Klik checkout untuk lanjut pembayaran</strong></span>
            </li>
          </ul>

          <?php
          $arr_kata = $_SESSION['cart'];
              $idBarang = implode(", ",$arr_kata);
          ?>
          <button type="button" class="btn btn-primary btn-block waves-effect waves-light"><a href="checkout.php?idbarang=<?php echo $idBarang?>?total=<?php echo $total1?>">CHECKOUT SEKARANG</a></button>

        </div>
      </div>
      <!-- Card -->

    </div>
    </center>

    <?php }?>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</section>
<!--Section: Block Content-->
    <?php
	include "footer.php";
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
	<!-- Waypoints JS -->
	<script src="public/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="public/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="public/js/nicesellect.js"></script>
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
    <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB eCommerce core JavaScript -->
  <script type="text/javascript" src="js/mdb-ecommerce.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
</body>
</html>



    



























































