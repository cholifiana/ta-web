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
   <h3> DETAIL PEMBELIAN </h3>
</div>
<body>
<body>
<table align="center" width="600">
		<table id='twitter-table' width=50% cellpadding=5 align='center'>
        <tr style='color:#OOOOO; height:15px;' bgcolor=#FAFAD2>
			<form method='post' enctype="multipart/form-data" action='proses-transaksi.php'>
                	<th>Kode Barang</th> 
					<th>Jumlah Beli</th>             
            <?php 
			$jumlah = $_POST['jlh_brg'];
			
			for($a = 1; $a <= $jumlah; $a++)
			{
				$b[$a] = $_POST['id'];
				$c[$a] = $_POST['tgl'];
			}
			
			
			for($i = 1; $i <= $jumlah; $i++)
			{
               echo "<tr align='center'>
                	<td><select name='kode_barang".$i."'>";
				$lihat = mysql_query("select * from produk");
				while($data = mysql_fetch_array($lihat))
				{
					echo "<option value=".$data['kode_barang'].">".$data['kode_barang']."<option>";
				}
			
        	echo "</select></td>
				<td align='center'><input type='text' name='satuan".$i."' /><input type='hidden' name='jlh_angka' value='".$jumlah."' /><input type='hidden' name='id_pembeli".$i."' value='$b[$i]' /><input type='hidden' name='tgl_beli".$i."' value='$c[$i]' /></td>
                </tr>";
			}
			?>
            <tr>
            	<td colspan="5"><input type="submit" value="Kirim" /></td>
            </tr>
            </form>
</table>
</div></div>
</body>
</html>