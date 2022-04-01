<?php 
include "../koneksi.php";


if(isset($_POST['create'])){
    $nama_admin = $_POST['nama_admin'];
    $username=$_POST['username'];
    $password = $_POST['password'];
    $sql = mysqli_query($koneksi,"INSERT INTO admin VALUES('','$nama_admin','$username','$password',NOW())") or die($koneksi);
    if ($sql) {
		echo "<script>alert('Data Berhasil dimasukan!');
		window.location.replace('home.php')</script>";
	} else {
		echo "<script>alert('Data Gagal dimasukan!');
		window.location.replace('home.php')</script>";
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
    <form class="class-input" method="post">
    <div class="col">
        <div class="row mt-5">
        <!-- <div class="mb-3">
            <label for="id_admin" class="form-label">Id Admin</label>
            <input type="text" class="form-control" name="id_admin" id="id_admin" placeholder="Id Admin">
        </div> -->
        <div class="mb-3">
            <label for="nama_admin" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama_admin" id="nama_admin" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        </div>
        <a href="home.php" button type="button" class="btn btn-primary"><i class="bi bi-chevron-left"></i> Kembali</a>  
        <button type="submit" class="btn btn-success" name="create" onclick="return confirm('Apakah anda yakin?')"><i class="bi bi-file-earmark-plus"></i> Tambah</button>
    </div>
    </form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>

