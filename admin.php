<?php
 include"config.php";
 ?>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
	<div id="body">
	<div id="header">
	<img src="n.jpg" width="200" alt ="image" /> 
</div>
<div id="nav"> <nav>
	<?php include"nav-admin.php"; ?>
	</div> 
<div id="section">   
   <h3> DATA ADMIN  </h3>
<button class='btn' onclick="location.href='tambah-admin.php'">Input Data</button>
</div>
<br>
<br>
<div id="form">
<table id='twitter-table' width=100% cellpadding=5>
        <tr style='color:#OOOOO; height:15px;' bgcolor=#FAFAD2>
 <th>No</th>
 <th>Kode Admin</th>
 <th>Nama Admin</th>
 <th>No Tlpn</th>
 <th>Alamat</th>
 <th>Jabatan</th> 
 <th>Password</th>
  <th align='center' width='90px;'>Opsi</tr></th>
 <?php
 $query=mysql_query("select * from dataadmin");
 $no=1;
 while($lihat=mysql_fetch_array($query)){
 ?>
 <tr bgcolor="white">
 <td><?php echo $no++; ?> </td>
<td> <?php echo $lihat['kode_admin']?></td>
 <td> <?php echo $lihat['nama_admin']?></td>
 <td>  <?php echo $lihat['no']?></td>
 <td>   <?php echo $lihat['alamat']?></td>
 <td>   <?php echo $lihat['jabatan']?></td>
  <td>   <?php echo $lihat['password']?></td>
  <td><a href="edit_admin.php?kode_admin=<?php echo $lihat['kode_admin'] ?>">Edit</a> 
	  <a href="hapus_admin.php?kode_admin=<?php echo $lihat['kode_admin'] ?>">Hapus</a>
	</tr>
<?php } ?>
</table>  
</div>
<div id="footer">
Eva 2015
</div>
</div>
</html>