<?php
	 include"config.php";
	$tanggal = date('d-m-y');
?>
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
   <h3> PEMBELIAN BARANG </h3>
</div>
<body>
<div id="form">
<form action="beli_sementara.php" method="post"  enctype="multipart/form-data">
<table align="center" width="600">
    <tr>
    	<td>Jumlah Barang yang akan dibeli</td>
        <td><input type="text" name="jlh_brg" /></td>       
    </tr>
    <tr>
         <td>ID Kasir</td>
         <td><input type="text" name="id" /><input type="hidden" name="tgl" value="<?php echo $tanggal ?>" /></td>
   </tr>
   <tr>
   		<td colspan="2"><input type="submit"  value="SELANJUTNYA" />    </tr>
</table>
<div id="footer">
Eva 2015
</div>
</div>
</html>