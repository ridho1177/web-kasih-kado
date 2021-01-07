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
    <title>Edit produk</title>
    <!-- Bootstrap -->
	<link rel="stylesheet" href="../public/css/bootstrap.css">
</head>
<body class="bg-secondary">
    <form method="POST" enctype='multipart/form-data'>
    <?php 
    //select data
    $sql =mysqli_query($con,"SELECT * FROM  kategori ");
    $query = mysqli_query($con,"SELECT * FROM  barang WHERE `barang`.`id_barang` = ".$_GET['idproduk']."");

    while ($record = mysqli_fetch_array($query)) {
    ?>

    <div class="container col-6">
        <div class="card">
            <div class="card-header">
            <h4>Edit Produk</h4>
            </div>
            <div class="card-body">
            <form method="POST" enctype='multipart/form-data'>
            <div class="form-group">
                <label for="nama_barang">Nama Produk</label>
                <input type="text" name="nama_barang" id="nama_barang" value="<?php echo $record['nama_barang'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga_barang">Harga Produk</label>
                <input type="text" name="harga_barang" id="harga_barang" value="<?php echo $record['harga_brg'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="jumlah_barang">Jumlah Produk</label>
                <input type="text" name="jumlah_barang" id="jumlah_barang" value="<?php echo $record['jml_barang'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Produk</label>
                <input class="form-control" name="deskripsi" id="deskripsi" value="<?php echo $record['deskripsi'] ?>" ></input>
            </div>

            <div class="form-group">
                <select class="form-control" name="kategori">
                <option>Pilih Kategori</option>
                        <?php if(mysqli_num_rows($sql) >0) { 
                        while ($row = mysqli_fetch_array($sql)){?>
                        <option><?php echo $row['id_kategori'] ?> JK : <?php echo $row['jk'] ?> , Umur : <?php echo $row['umur'] ?></option>
                        <?php } }?>     >
                </select>
            </div>
            <div class="form-group">
                <label for="filegambar">Gambar</label>
                <input type="file" class="form-control-file" name="filegambar" id="filegambar"">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
            </div>
        <?php 
            }
        ?>
        </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['simpan'])) {
    //buat folder bernama gambar
    $tempdir = "../public/images/product/"; 
            if (!file_exists($tempdir))
            mkdir($tempdir,0755); 

            $target_path = $tempdir . basename($_FILES['filegambar']['name']);

            //nama gambar
            $nama_gambar=$_FILES['filegambar']['name'];
            //ukuran gambar
            $ukuran_gambar = $_FILES['filegambar']['size']; 

            $fileinfo = @getimagesize($_FILES["filegambar"]["tmp_name"]);
            //lebar gambar
            $width = $fileinfo[0];
            //tinggi gambar
            $height = $fileinfo[1]; 
            if($ukuran_gambar > 81920){ 
                echo 'Ukuran gambar melebihi 80kb';
            }else if ($width > "480" || $height > "640") {
                echo 'Ukuran gambar harus 480x640';
            }else{
                if (move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path)) {
                    
                    $sql ="UPDATE `barang` SET `nama_barang` = '".$_POST['nama_barang']."', `harga_brg` = '".$_POST['harga_barang']."', `jml_barang` = '".$_POST['jumlah_barang']."', `deskripsi` = '".$_POST['deskripsi']."', `foto` = '".$nama_gambar."', `id_kategori` = '".$_POST['kategori']."' WHERE `barang`.`id_barang` = ".$_GET['idproduk'].";";
                    //eksekusi query
                    $hasil=mysqli_query($con,$sql) ;
                    ?>
            <script>
                alert("data sukses diubah");
                window.location='produk.php';
            </script>
                

<?php
                } else {
                    echo 'Ubah data gagal';
                }
            } 
    }
?>

	<!-- Jquery -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/jquery-migrate-3.0.0.js"></script>
	<script src="../public/js/jquery-ui.min.js"></script>
</body>

</html>
</center>