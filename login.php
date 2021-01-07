<?php

session_start();

    require_once("koneksi.php");
   /* 
    session_start();
    $username = $_POST['user'];
    $pass = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE username_user = '$username'";
    $query = $con->query($sql);
    $hasil = $query->fetch_assoc();
    if($query->num_rows == 0) {
      echo "<div align='center'>Username Belum Terdaftar! <a href='logres.php'>Back</a></div>";
    } else {
      if($pass <> $hasil['password']) {
        echo "<div align='center'>Password salah! <a href='logres.php'>Back</a></div>";
      } else {
        $_SESSION['user'] = $hasil['user'];
        header('location:homeLogin.php');
      }
    }
  ?>

  */

$username = $_POST["user"];
$pass = md5($_POST["password"]);

$sql = "select * from user where username_user='".$username."' and password='".$pass."' limit 1";
$hasil = mysqli_query ($con,$sql);
$jumlah = mysqli_num_rows($hasil);


  if ($jumlah>0) {
    $row = mysqli_fetch_assoc($hasil);
    $_SESSION["id_user"]=$row["id_user"];
    $_SESSION["username"]=$row["username_user"];
    $_SESSION["nama"]=$row["nama_user"];
    $_SESSION["email"]=$row["email"];
  

    header("Location:homeLogin.php");
    
  }else {
    echo "<script>alert('Username atau Password Salah !!!'); window.location.href='logres.php'</script>";
  }
?>