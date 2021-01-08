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
    $sql ="UPDATE `pembayaran` SET `status_pembayaran` = 'Sudah dibayar' WHERE `pembayaran`.`id_pembayaran` =".$_GET['idBayar']."";
        //eksekusi query
        $hasil=mysqli_query($con,$sql) ;
    ?>
<script>
    alert("Konfirmasi pembayaran sukses");
    window.location='pembayaran.php';
</script>