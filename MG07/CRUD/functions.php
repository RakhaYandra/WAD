<?php
$conn = mysqli_connect("localhost", "root", "", "tugaswad");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[]= $row;
    }
    return $rows;
}

function form($data){
    global $conn;
    $kode_barang = htmlspecialchars($data["kode_barang"]);
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $harga_barang = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);

    $query = "INSERT INTO barang
            VALUES
            ('$kode_barang', '$nama_barang', '$harga_barang', '$stok')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($kode_barang){
    global $conn;
    mysqli_query($conn, "DELETE FROM barang WHERE kode_barang = '$kode_barang'");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $kode_barang = htmlspecialchars($data["kode_barang"]);
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $harga_barang = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);

    $query = "UPDATE barang SET
                kode_barang = '$kode_barang',
                nama_barang = '$nama_barang',
                harga = '$harga_barang',
                stok = '$stok'
            WHERE kode_barang = '$kode_barang'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>

