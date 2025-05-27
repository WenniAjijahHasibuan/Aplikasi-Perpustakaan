<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

// Cek apakah username sudah ada
$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
if (mysqli_num_rows($cek) > 0) {
    echo "Username sudah terdaftar. <a href='register.php'>Coba lagi</a>";
    exit;
}

// Simpan ke database
mysqli_query($koneksi, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
echo "Registrasi berhasil. <a href='index.php'>Login sekarang</a>";
?>
