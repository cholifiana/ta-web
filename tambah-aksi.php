<?php
include"config.php";
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];
$kategori=$_POST['kategori'];
$input = mysql_query("insert into produk values('$kode_barang','$nama_barang','$harga','$stok','$kategori')");
if ($input){header("location:produk.php");}
else { echo "gagal"; }
?>