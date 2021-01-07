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

<center>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah produk</title>
    <!-- Bootstrap -->
	<link rel="stylesheet" href="../public/css/bootstrap.css">
<?php 
require_once("../koneksi.php");
?>

</head>
<body class="bg-secondary">
<main role="main" class="flex-shrink-0">
<div class="container col-6">

    <div class="card">
        <div class="card-header">
        <h4>Tambah Admin</h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype='multipart/form-data'>
        <div class="form-group row">
        <label for="usernam" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="nama_admin" required>
        </div>
        </div>

        <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="username" required>
        </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
        </div>
    </form>
        </div>
    </div>
</div>

</main>
    <?php

    if (isset($_POST['simpan'])) { 

        $cek_user=mysqli_num_rows(mysqli_query($con, "SELECT * FROM admin WHERE username ='$_POST[username]'"));
        if ($cek_user > 0) {
            echo '<script language="javascript">
            alert ("Username Sudah Ada Yang Menggunakan");
            window.location="tambahadmin.php";
            </script>';
            exit();
        }else{
        $nama = $_POST['nama_admin'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);                  
                    $sql= "INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES (NULL, '".$nama."', '".$username."', '".$password."')";

                    //eksekusi query
                    $hasil=mysqli_query($con,$sql) ;
    ?>
            <script>
                alert("data sukses ditambahkan");
                window.location='menuAdmin.php';
            </script>
                

<?php
                } } 
?>

	<!-- Jquery -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/jquery-migrate-3.0.0.js"></script>
	<script src="../public/js/jquery-ui.min.js"></script>

</body>

</html>
</center>