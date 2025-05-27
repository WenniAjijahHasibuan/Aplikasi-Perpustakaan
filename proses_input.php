<?php
include 'config.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];

mysqli_query($koneksi, "INSERT INTO buku (judul, penulis, tahun) VALUES ('$judul', '$penulis', '$tahun')");

header("Location: dashboard.php");
?>
