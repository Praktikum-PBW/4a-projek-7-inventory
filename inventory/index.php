<?php
	require 'koneksi.php';
	// Cek Session
    session_start();
    if (isset($_SESSION["Admin"])){
        header("Location: admin/home.php");
        exit;
    }
?>
