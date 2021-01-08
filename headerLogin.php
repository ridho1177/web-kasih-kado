<!-- Header -->
<?php 
error_reporting(E_ALL & ~E_NOTICE);
session_start();
	//initialize cart if not set or is unset
if(!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}

	//unset qunatity
unset($_SESSION['qty_array']);
?>
<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
		<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-briefcase"></i> <a href="belanja.php">Pesanan saya</a></li>
								<li><i class="ti-user"></i> <a href="profileUser.php"><?php echo $_SESSION['username'];?></a></li>
								<li><i class="ti-power-off"></i><a href="logout.php">Logout</a></li>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                    </br>
							<a href="homeLogin.php"><h4>kasihkado</h4></a>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form" method="GET" action="search.php">
									<input type="text" placeholder="Cari kado..." name="cari" >
									<button value="cari" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
                    </div>
                    


					<div class="col-lg-8 col-md-7 col-12">
						<form  method="GET" action="searchLogin.php">
                            <div class="search-bar-top">
							<div class="search-bar">
								<select name="jeniskelamin" id="jeniskelamin" >
                                    <option value="" selected='selected' >Jenis Kelamin</option>
                                    <option value="L"  <?php if ($_GET['jeniskelamin']=="L"){ echo "selected"; } ?>>Laki-laki</option>
                                    <option value="P"  <?php if ($_GET['jeniskelamin']=="P"){ echo "selected"; } ?>>Perempuan</option>
                                    
								</select>
								<form >
									<input name="cari" id="cari" placeholder="Cari kado..." type="search" >
									<button value="cari" type="submit" class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
                        </div>
                        </form>
                    </div>
                

					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="profileUser.php" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="keranjang.php" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?php echo count($_SESSION['cart']); ?></span></a>
								<!-- Shopping Item -->
				
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</header>
	<!--/ End Header -->