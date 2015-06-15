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
<img src="n.jpg" width="400" alt ="image" /> 
</div>
<?php include"nav-kasir.php" ?>	
<div id="section">   
   <h3> DATA BARANG  </h3>
</div>
<div id="form">
<table id='twitter-table' width=100% cellpadding=5>
        <tr style='color:#OOOOO; height:15px;' bgcolor=#FAFAD2>
<th>No</th>		
 <th>Kode Barang</th>
 <th>Nama Barang</th>
 <th>Harga Barang</th>
 <th>Stok</th>
 <th>Kategori</th>
 <th align='center' width='90px;'>Opsi</tr></th>
 <?php
 $query=mysql_query("select * from produk");
 $no=1;
 while($lihat=mysql_fetch_array($query)){
 ?>
 <tr bgcolor="white">
 <td> <?php echo $no++ ?></td>
<td> <?php echo $lihat['kode_barang']?></td>
 <td> <?php echo $lihat['nama_barang']?></td>
 <td>  <?php echo $lihat['harga']?></td>
 <td>   <?php echo $lihat['stok']?></td>
 <td>   <?php echo $lihat['kategori']?></td>
 <td><a href="transaksi.php<?php echo $lihat['kode_barang'] ?>">Pilih</a> 
	</tr>
<?php } ?>
</table>  
</div>
<div id="footer">
Eva 2015
</div>
</div>
</html>