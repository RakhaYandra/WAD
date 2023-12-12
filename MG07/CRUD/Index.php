<?php
require 'functions.php';
$barang = query("SELECT * FROM barang");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Toko Komputer Mang Oleh</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <h1>Daftar Barang Mang Oleh</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($barang as $row): ?>
            <tr>
                <td><?= $i ?> </td>
                <td><?=$row ["kode_barang"];?> </td>
                <td><?=$row ["nama_barang"];?> </td>
                <td><?=$row ["harga"];?> </td>
                <td><?=$row ["stok"];?> </td>
                <td class="actions">
                    <a href="ubah.php?kode_barang=<?=$row["kode_barang"]; ?>" class="action-button edit" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Data?');">Ubah</a>
                    <a href="hapus.php?kode_barang=<?=$row["kode_barang"]; ?>" class="action-button delete" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            </table>
            <a href="form.php" class="add-button">Tambahkan Data Barang</a>
    <br><br>
</body>
</html>
