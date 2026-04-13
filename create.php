<?php
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama     = $_POST['nama_donatur'];
    $email    = $_POST['email'];
    $jumlah   = $_POST['jumlah'];
    $pesan    = $_POST['pesan'];
    $penerima = $_POST['penerima'];
    $status   = $_POST['status'];

    $query = "INSERT INTO donasi (nama_donatur, email, jumlah, pesan, penerima, status)
              VALUES ('$nama', '$email', '$jumlah', '$pesan', '$penerima', '$status')";

    mysqli_query($conn, $query);
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Donasi</title>
</head>
<body>

<h2>Tambah Donasi</h2>
<a href="index.php">← Kembali</a>
<br><br>

<form method="POST" action="">
    Nama Donatur : <input type="text" name="nama_donatur"><br><br>
    Email        : <input type="email" name="email"><br><br>
    Penerima     : <input type="text" name="penerima"><br><br>
    Jumlah (Rp)  : <input type="number" name="jumlah"><br><br>
    Pesan        : <textarea name="pesan"></textarea><br><br>
    Status       :
    <select name="status">
        <option value="pending">Pending</option>
        <option value="sukses">Sukses</option>
        <option value="gagal">Gagal</option>
    </select><br><br>
    <input type="submit" value="Simpan">
</form>

</body>
</html>
