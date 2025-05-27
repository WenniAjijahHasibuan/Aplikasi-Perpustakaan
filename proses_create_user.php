<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($koneksi, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
header("Location: dashboard.php");
?>
