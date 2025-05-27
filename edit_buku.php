<?php
include 'config.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'");
$buku = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Buku</h2>
    <form method="POST" action="proses_edit.php">
        <input type="hidden" name="id" value="<?php echo $buku['id']; ?>">

        <label>Judul:</label><br>
        <input type="text" name="judul" value="<?php echo $buku['judul']; ?>" required><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="<?php echo $buku['penulis']; ?>" required><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun" value="<?php echo $buku['tahun']; ?>" required><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
