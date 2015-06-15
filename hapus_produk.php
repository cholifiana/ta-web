<?php
include('config.php');
$kode_barang = $_GET['kode_barang'];
$hps = mysql_query("delete from produk where kode_barang=$kode_barang");
if ($hps) {
    header("location:produk.php");
} else {
    echo "gagal menghapus";
}
?>