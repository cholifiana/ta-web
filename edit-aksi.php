<?php
include('config.php');
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
$update = mysql_query("update produk set kode_barang='$kode_barang', nama_barang='$nama_barang', harga='$harga', stok='$stok', kategori='$kategori' where kode_barang='$kode_barang'");
if ($update) {
    header("location:produk.php");
} else {
    echo "gagal mengupdate data";
}
?>