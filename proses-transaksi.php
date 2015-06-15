<?php
include"config.php";
?>
<html>
<head>
 <link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="nav.css" type="text/css">
</head>
<div id="body">
<div id="header">
TRANSAKSI
<img src="n.jpg" width="200" alt ="image" /> 
</div>
<?php include"nav-kasir.php" ?>	
<?php

	$jumlah = $_POST['jlh_angka'];
	for($i = 1; $i <= $jumlah; $i++)
	{
		$id[$i] = $_POST['id_pembeli'.$i];
		$tgl[$i] = $_POST['tgl_beli'.$i];
		$kode_barang[$i] = $_POST['kode_barang'.$i];
		$satuan_barang[$i] = $_POST['satuan'.$i];
		mysql_query("insert into pembeli values('".$id[$i]."','".$kode_barang[$i]."','".$satuan_barang[$i]."','".$tgl[$i]."')");
		mysql_query("update produk set stok = stok - '".$satuan_barang [$i]."' where kode_barang= '".$kode_barang[$i]."'");
	}
	?>
<div id="body">
<div id="form" >
    <?php
	echo "<form enctype='multipart/form-data' action='calculation.php' method='post'>
			<table>
			<tr>
			<td align='center'><h1> Lihat Daftar Belanja Dan Cetak Laporan Pembayaran</h1></td>
			</tr>
			<tr>
			<td align='center'>
			<input type='hidden' name='aidi' value='".$id[1]."' />
			<input type='submit' value='TRANSAKSI DETAIL' onclick='muat'/>
				</td>
			</tr>
		</form>";
?>
<script type="text/javascript">
	function muat()
	{
	document.location.href = "calculation.php";
	}
</script>
</div></div>
</body>
</html>
