<?php
include "../koneksi.php";

$id_admin=$_GET['id_admin'];
$sql=mysqli_query ($koneksi,"DELETE FROM admin WHERE id_admin='$id_admin'") or die($koneksi);
if ($sql){
    echo"
        <script> 
        alert('Data Berhasil dihapus!');
        document.location.href='home.php';
        </script>
    ";
} else{
    echo"
    <script> 
    alert('Data Gagal dihapus!');
    document.location.href='home.php';
    </script>
"; 
}

?>
