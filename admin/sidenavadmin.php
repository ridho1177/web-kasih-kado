<div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="user.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            User
                        </a>
                        <a class="nav-link" href="produk.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Produk
                        </a>
                        <a class="nav-link" href="transaksi.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Transaksi
                        </a>
                        <a class="nav-link" href="pembayaran.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Pembayaran
                        </a>
                        <a class="nav-link" href="pesan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Pesan
                        </a>
                        <a class="nav-link" href="menuAdmin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Admin
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?php echo $_SESSION['usernameadm']; //menampilkan isi SESSION?>
                </div>
            </nav>
        </div>