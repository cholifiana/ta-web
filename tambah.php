<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="header">
INPUT DATA PRODUK
</div>
<?php include"nav-admin.php" ?>	
<div id="section">
<h1> Daftar </h1>
<table>
<form action="tambah-aksi.php" method="post">
<tr>
<td> Kode Barang</td> 
<td> <input type="text" name="kode_barang"></td>
</tr>
<tr>
<td> Nama Barang </td> 
<td> <input type="text" name="nama_barang"></td>
</tr>
<tr>
<td> Harga </td> 
<td> <input type="text" name="harga"></td>
</tr>
<tr>
<td> Stok </td> 
<td> <input type="text" name="stok"></td>
</tr>
<tr>
<tr>
<td> Kategori </td> 
<td> <input type="text" name="kategori"></td>
</tr>
<tr>
<td> <input type="submit" value="input" > </td>
</tr>
</form>
</div>
</table>
<div id="footer">
Eva 2015
</div>
</body>
</html>