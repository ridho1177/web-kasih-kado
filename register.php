<?php 
require_once('koneksi.php');

if(isset($_POST['register_submit']))
{
    $nama_user = $_POST['nama_user'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $username_user = $_POST['username_user'];
    $alamat = $_POST['alamat'];
    $password = md5($_POST['password']);
    if($register($nama_user,$email,$no_hp,$alamat,$username_user,$password))
    {
      header('location:logres.php');
    }
}

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
    <h1 class="mt-5">Register Form</h1>
    <p class="lead">Silahkan Daftarkan Identitas Anda</p>
    <hr/>
    <form method="post" action="simpanregistrasi.php">
    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Nama <span>*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="nama_user" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Email <span>*</span></label>
      <div class="col-sm-10">
        <input type="email" class="form-control"  name="email" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">No Hp <span>*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="no_hp" required>
      </div>
    </div>
<div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">alamat <span>*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="alamat" required>
      </div>
    </div>
<div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Username <span>*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="username_user" required>
      </div>
    </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password <span>*</span></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
  </div>
  <div class="form-group row justify-content-center">
    <div class="col-sm-2 text-center">
      <button class="btn btn-primary" type="submit" name="register_submit">Register</button>
    </div>
  </div>
  <div class="form-group row justify-content-center">
    <div class="col-sm-5">
      <a href="logres.php">Sudah memiliki akun? Login disini</a>
    </div>
  </div>
</form>
  </div>
</main>

</body>
</html>