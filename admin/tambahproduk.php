<?php 
session_start();
require_once ("../koneksi.php");
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

<?php 
$sql =mysqli_query($con,"SELECT * FROM  kategori ");

?>
<div class="container col-7">
    <div class="card">
        <div class="card-header">
        <h4>Tambah Produk</h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype='multipart/form-data'>

        <div class="form-group row">
        <label for="username" class="col-sm-4 col-form-label">Nama Produk</label>
            <div class="col-sm-8">
                <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="cth: baju kemeja" required>
            </div>
        </div>

        <div class="form-group row">
        <label for="username" class="col-sm-4 col-form-label">Harga Produk</label>
            <div class="col-sm-8">
                <input  type="text" name="harga_barang" id="harga_barang" class="form-control" placeholder="cth: 100000" required>
            </div>
        </div>

        <div class="form-group row">
        <label for="username" class="col-sm-4 col-form-label">Jumlah Produk</label>
            <div class="col-sm-8">
                <input  type="text" name="jumlah_barang" id="jumlah_barang" class="form-control" placeholder="cth: 10" required>
            </div>
        </div>

        <div class="form-group row">
        <label for="username" class="col-sm-4 col-form-label">Deskripsi Produk</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
            </div>
        </div>

        <div class="form-group row">
        <label for="username" class="col-sm-4 col-form-label">Kategori Produk</label>
            <div class="col-sm-8">
                <select class="form-control" name="kategori">
                <option>Pilih Kategori</option>
                        <?php if(mysqli_num_rows($sql) >0) { 
                        while ($row = mysqli_fetch_array($sql)){?>
                        <option><?php echo $row['id_kategori'] ?> JK : <?php echo $row['jk'] ?> , Umur : <?php echo $row['umur'] ?></option>
                        <?php } }?>     >
                </select>
            </div>
        </div>
        <div class="form-group row">
        <label for="username" class="col-sm-4 col-form-label">Gambar Produk</label>
            <div class="col-sm-8">
            <input type="file" class="form-control-file" name="filegambar" id="filegambar">
            </div>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
        </div>
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
                    
                    $sql= "INSERT INTO barang(nama_barang,harga_brg, jml_barang, deskripsi,  id_kategori, foto) VALUES('".$_POST['nama_barang']."', '".$_POST['harga_barang']."', '".$_POST['jumlah_barang']."', '".$_POST['deskripsi']."', '".$_POST['kategori']."', '".$nama_gambar."')";

                    //eksekusi query
                    $hasil=mysqli_query($con,$sql) ;
                    ?>
            <script>
                alert("data sukses ditambahkan");
                window.location='produk.php';
            </script>
                

<?php
                } else {
                    echo 'Simpan data gagal';
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