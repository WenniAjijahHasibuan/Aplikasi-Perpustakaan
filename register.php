<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Akun</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <form method="POST" action="proses_register.php">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Daftar</button>
    </form>

    <p>Sudah punya akun? <a href="index.php">Login di sini</a></p>
</body>
</html>
