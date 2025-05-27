<?php
session_start();
if (!isset($_SESSION['status'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Data Buku</title>
</head>
<body>
    <h2>Input Buku Baru</h2>
    <form method="POST" action="proses_input.php">
        <label>Judul:</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" required><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun" required><br><br>

        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="dashboard.php">Kembali ke Dashboard</a>
</body>
</html>
