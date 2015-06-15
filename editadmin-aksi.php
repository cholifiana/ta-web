<?php
include('config.php');
$kode_admin = $_POST['kode_admin'];
$nama_admin = $_POST['nama_admin'];
$no = $_POST['no'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$password = $_POST['password'];
$update = mysql_query("update dataadmin set kode_admin='$kode_admin', nama_admin='$nama_admin', no='$no', alamat='$alamat', jabatan='$jabatan', password='$password' where kode_admin='$kode_admin'");
if ($update) {
    header("location:admin.php");
} else {
    echo "gagal mengupdate data";
}
?>