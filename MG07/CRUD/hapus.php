<?php
require 'functions.php';

$kode_barang = $_GET["kode_barang"];

if(isset($_GET["kode_barang"])){
    $kode_barang = htmlspecialchars($_GET["kode_barang"]);
    if( hapus($kode_barang) > 0) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'index.php';
            </script>
        ";
        } else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>