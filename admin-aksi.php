<?php
include"config.php";
$kode_admin=$_POST['kode_admin'];
$nama_admin=$_POST['nama_admin'];
$no=$_POST['no'];
$alamat=$_POST['alamat'];
$jabatan=$_POST['jabatan'];
$password=$_POST['password'];
$input = mysql_query("insert into dataadmin values('$kode_admin','$nama_admin','$no','$alamat','$jabatan','$password')");
if ($input){header("location:admin.php");}
else { echo "gagal"; }
?>