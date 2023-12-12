<?php
require 'functions.php';

if(isset($_POST["submit"])){

    if( form($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1>Tambah Data Barang</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="kode_barang">Kode Barang :</label>
                <input type="text" name="kode_barang" id="kode_barang" required>
            </li>
            <li>
                <label for="nama_barang">Nama Barang :</label>
                <input type="text" name="nama_barang" id="nama_barang" required>
            </li>
            <li>
                <label for="harga">Harga Barang :</label>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <label for="stok">Stok Barang :</label>
                <input type="text" name="stok" id="stok" required>
            </li>
            <li>
                <button type="submit" name="submit" class="submit-button">Submit Data</button>
            </li>
        </ul>
    </form>

</body>

</html>
