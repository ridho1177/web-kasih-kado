<?php

session_start();

    require_once("../koneksi.php");

$username = $_POST["user"];
$pass = md5($_POST["password"]);

$sql = "select * from admin where username='".$username."' and password='".$pass."' limit 1";
$hasil = mysqli_query ($con,$sql);
$jumlah = mysqli_num_rows($hasil);


    if ($jumlah>0) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["id_admin"]=$row["id_admin"];
        $_SESSION["usernameadm"]=$row["username"];

        header("Location:admin.php");
        
    }else {
        echo "<script>alert('Username & Password Salah !!!'); window.location.href='loginPage.php'</script>";
    }
?>