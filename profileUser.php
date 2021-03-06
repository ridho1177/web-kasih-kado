<?php 
require_once('koneksi.php');

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
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  
  <!-- StyleSheet -->
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="public/css/bootstrap.css">
  <link href="public/css/admin.css" rel="stylesheet" />
  <!-- Eshop StyleSheet -->
    <title>Register Form</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">

    <!-- Bootstrap core CSS -->
<link href="public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100">


    <!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container col-6">
    <h1 class="mt-5">Profile Anda</h1>
    <p class="lead">Harap rahasiakan dari orang lain!</p>
    <hr/>

    <?php
    
        $data_user = mysqli_query($con, "SELECT * FROM user WHERE username_user='".$_SESSION['username']."'");

        while ($record= mysqli_fetch_array($data_user)) {	
    ?>

        <form method="post" action="simpanregistrasi.php">
        <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="nama_user" value="<?php echo $record['nama_user'] ?>" readonly>
        </div>
        </div>

        <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control"  name="email" value="<?php echo $record['email'] ?>" readonly>
        </div>
        </div>
        <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">No Hp </label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="no_hp" value="<?php echo $record['no_hp'] ?>" readonly>
        </div>
        </div>
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">alamat </label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="alamat" value="<?php echo $record['alamat'] ?>" readonly>
        </div>
        </div>
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Username </label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="username_user" value="<?php echo $record['username_user'] ?>" readonly>
        </div>
        </div>
    <div class="form-group row justify-content-center">
        <div class="col-sm-2 text-center">
        <button class="btn btn-primary" type="submit" name="register_submit">Update Profile</button>
        </div>
    </div>
    </form>
<?php 
    }
?>
    </div>
</main>

</body>
</html>