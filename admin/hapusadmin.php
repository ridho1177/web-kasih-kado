<?php
require_once("../koneksi.php");

if(isset($_GET['idadmin'])){
    $query="DELETE FROM `admin` WHERE `admin`.`id_admin` = ".$_GET['idadmin']."";

    $hasil =mysqli_query($con,$query);
?>
<script>
    alert("data berhasil dihapus");
    window.location='menuAdmin.php'
</script>

<?php
}
else{
?>
<script>
    alert("data gagal dihapus");
    window.location='menuAdmin.php'
</script>
<?php
}
?>