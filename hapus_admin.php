<?php
include('config.php');
$kode_admin = $_GET['kode_admin'];
$hps = mysql_query("delete from dataadmin where kode_admin=$kode_admin");
if ($hps) {
    header("location:admin.php");
} else {
    echo "gagal menghapus";
}
?>