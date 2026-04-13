<?php
require_once 'database.php';

$result = mysqli_query($conn, "SELECT * FROM donasi ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Donasi</title>
</head>
<body>

<h2>Data Donasi Online</h2>
<a href="create.php">+ Tambah Donasi</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Donatur</th>
        <th>Email</th>
        <th>Penerima</th>
        <th>Jumlah (Rp)</th>
        <th>Pesan</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1; while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama_donatur'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['penerima'] ?></td>
        <td><?= number_format($row['jumlah'], 0, ',', '.') ?></td>
        <td><?= $row['pesan'] ?? '-' ?></td>
        <td><?= $row['status'] ?></td>
        <td>
            <a href="update.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>