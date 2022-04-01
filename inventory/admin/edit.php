<?php
include "../koneksi.php";

$id_admin=$_GET['id_admin'];
$query=mysqli_query ($koneksi," SELECT * FROM admin WHERE id_admin='$id_admin'");
$r=mysqli_fetch_array($query);
if(isset($_POST['edit'])){
    $nama_admin=$_POST['nama_admin'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql=mysqli_query ($koneksi,"UPDATE admin SET id_admin='$id_admin', nama_admin='$nama_admin', username='$username',password='$password' WHERE id_admin='$id_admin'" ) or die($koneksi);
    if ($sql){
        echo"
            <script> 
            alert('Data Berhasil diedit!');
            document.location.href='home.php';
            </script>
        ";
    } else{
        echo"
        <script> 
        alert('Data Gagal diedit!');
        document.location.href='create.php';
        </script>
    "; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="row mt-5">
                <form class="form-input" method="POST">
                    <div class="mb-3">
                        <label for="nama_admin" class="form-label">Nama</label>
                        <input type="text" name="nama_admin" value="<?php echo $r['nama_admin']?>" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" value="<?php echo $r['username']?>" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="text" name="password" value="<?php echo $r['password']?>" class="form-control" >
                    </div>
                    <a href="home.php" button type="button" class="btn btn-primary"><i class="bi bi-chevron-left"></i> Kembali</a>  
                    <button type="submit" class="btn btn-success" name="edit" onclick="return confirm('Apakah anda yakin?')"><i class="bi bi-file-earmark-plus"></i> Simpan</button>    
                </form>                                     
            </div>
        
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>