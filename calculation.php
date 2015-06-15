<?php
include"config.php";
	
	$aidi = $_POST['aidi'];
	
	$lihat = mysql_query("select pembeli.id_pembeli,pembeli.kode_barang,produk.nama_barang,format(produk.harga,0) as 'harga',pembeli.jlh_beli,format((produk.harga * pembeli.jlh_beli),0) as 'Total' from pembeli,produk where pembeli.kode_barang= produk.kode_barang and pembeli.id_pembeli = '".$aidi."' order by pembeli.id_pembeli DESC");
	$id = mysql_query("select id_pembeli from pembeli where id_pembeli = '".$aidi."' order by id_pembeli limit 1");
	$ar_id = mysql_fetch_array($id);
?>
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
<div id="form">
	<table id='twitter-table' width=100% cellpadding=5>
        <tr style='color:#OOOOO; height:15px;' bgcolor=#FAFAD2>
 <th>Kode Barang</th>
 <th>Nama Barang</th>
 <th>Harga Barang</th>
 <th>Jumlah Barang</th>
 <th>Jumlah Harga</th>
    <?php
		while($arr = mysql_fetch_array($lihat))
		{ ?>
			<tr bgcolor="white">
				<td><?php echo $arr['kode_barang'] ?></td>
				<td><?php echo $arr['nama_barang'] ?> </td>
				<td><?php echo $arr['harga']?></td>
				<td><?php echo $arr['jlh_beli']?> </td>
				<td><?php echo $arr['Total']?></td>
			</tr>
		<?php }  
		$hasil = mysql_query("select format(sum(produk.harga * pembeli.jlh_beli),0) as 'jlh_total' from pembeli,produk where pembeli.kode_barang = produk.kode_barang and pembeli.id_pembeli = '".$aidi."'");
		$arr_hsl = mysql_fetch_array($hasil);?>
        <form method='post' action='lap.php' enctype='multipart/form-data' target='_blank'>
		<tr>
			 <th bgcolor="white" colspan='5' align='right'> Total Harga <?php echo $arr_hsl['jlh_total'] ?> <input type='hidden' name='id' value='".$aidi."' /></td></tr></th> 
		</tr>
		<tr>
		<td colspan='5' align='right'><input id='lain' type='submit' value='Cetak Laporan Transaksi' /></td>
		</tr>
</table>  
</div>
<div id="footer">
Eva 2015
</div>
</div>
</html>