UPDATE `transaksi` SET `status_transaksi` = 'Dikirim' WHERE `transaksi`.`id_transaksi` = 13;

<?php 
require_once ("../koneksi.php");
session_start();

if (!isset($_SESSION["usernameadm"])) {
	echo "<script>alert('session berakhir !!!'); window.location.href='loginPage.php'</script>";
	exit;
}

$id_admin=$_SESSION["id_admin"];
$username=$_SESSION["usernameadm"];
?>

    <?php
    $sql ="UPDATE `transaksi` SET `status_transaksi` = 'Dikirim' WHERE `transaksi`.`id_transaksi` =".$_GET['idTransaksi']."";
        //eksekusi query
        $hasil=mysqli_query($con,$sql) ;
    ?>
<script>
    alert("segera kirim barang");
    window.location='transaksi.php';
</script>