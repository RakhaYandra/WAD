<?php
require 'functions.php';

if(isset($_GET["kode_barang"])) {
    $kode_barang = htmlspecialchars($_GET["kode_barang"]);
    $barang = query("SELECT * FROM barang WHERE kode_barang = '$kode_barang'")[0];

    if(isset($_POST["submit"])){
        $_POST["kode_barang"] = htmlspecialchars($_POST["kode_barang"]);
        $_POST["nama_barang"] = htmlspecialchars($_POST["nama_barang"]);
        $_POST["harga"] = htmlspecialchars($_POST["harga"]);
        $_POST["stok"] = htmlspecialchars($_POST["stok"]);

        if( ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Diubah');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
} else {
    echo "Kode barang tidak ditemukan!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Barang</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php if (isset($barang)) : ?>
        <h1>Ubah Data Barang</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="kode_barang">Kode Barang :</label>
                    <input type="text" name="kode_barang" id="kode_barang" required value="<?= $barang["kode_barang"] ?>">
                </li>
                <li>
                    <label for="nama_barang">Nama Barang :</label>
                    <input type="text" name="nama_barang" id="nama_barang" required value="<?= $barang["nama_barang"] ?>">
                </li>
                <li>
                    <label for="harga">Harga Barang :</label>
                    <input type="text" name="harga" id="harga" required value="<?= $barang["harga"] ?>">
                </li>
                <li>
                    <label for="stok">Stok Barang :</label>
                    <input type="text" name="stok" id="stok" required value="<?= $barang["stok"] ?>">
                </li>
                <li>
                    <button type="submit" name="submit" class="submit-button">Ubah Data</button>
                </li>
            </ul>
        </form>
    <?php else : ?>
        <p>Kode barang tidak ditemukan!</p>
    <?php endif; ?>

</body>

</html>
