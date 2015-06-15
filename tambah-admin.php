<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="header">
INPUT DATA ADMIN
</div>
<?php include"nav-admin.php" ?>	
<div id="section">
<h1> Daftar </h1>
<table>
<form action="admin-aksi.php" method="post">
<tr>
<td> Kode Admin</td> 
<td> <input type="text" name="kode_admin"></td>
</tr>
<tr>
<td> Nama Admin </td> 
<td> <input type="text" name="nama_admin"></td>
</tr>
<tr>
<td> No Tlpn </td> 
<td> <input type="text" name="no"></td>
</tr>
<tr>
<td> Alamat </td> 
<td> <input type="text" name="alamat"></td>
</tr>
<tr>
<tr>
<td> Jabatan </td> 
<td> <input type="text" name="jabatan"></td>
</tr>
<tr>
<td> Password </td> 
<td> <input type="text" name="password"></td>
</tr>
<tr>
<td> <input type="submit" value="input" > </td>
</tr>
</form>
</table>
</div>
<div id="footer">
Eva 2015
</div>
<body>
</html>