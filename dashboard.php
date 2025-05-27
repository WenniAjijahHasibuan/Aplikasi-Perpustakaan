<?php
session_start();
if (!isset($_SESSION['status'])) {
    header("Location: index.php");
    exit;
}

include 'config.php';

// Cek koneksi dan query
$buku = mysqli_query($koneksi, "SELECT * FROM buku");
if (!$buku) {
    die("Query error: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Perpustakaan</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('toba.jpg'); /* Pastikan file ini ada */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        h2, h3 {
            margin-top: 0;
        }

        a {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #f8f8f8;
        }

        td:last-child {
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Selamat datang, <?= htmlspecialchars($_SESSION['username']); ?>!</h2>
        <a href="input_buku.php">+ Tambah Buku Baru</a>
        <a href="logout.php">Logout</a>

        <h3>Daftar Buku</h3>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($buku)) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($row['judul']); ?></td>
                        <td><?= htmlspecialchars($row['penulis']); ?></td>
                        <td><?= htmlspecialchars($row['tahun']); ?></td>
                        <td>
                            <a href="edit_buku.php?id=<?= $row['id']; ?>">Edit</a> |
                            <a href="hapus_buku.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
