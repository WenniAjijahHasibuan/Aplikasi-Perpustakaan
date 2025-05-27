<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:dashboard.php");
} else {
    echo "Login gagal! <a href='index.php'>Coba lagi</a>";
}
?>
