<?php 
  session_start();
  ?>
<head>
<title>Laporan PINK FHASION </title>
</head>

<body onload="window.print()">
<?php 
  include "config.php";
 
echo "<center><h2 style='margin-bottom:3px;'>PINK FHASION</h2>
				Laporan TRANSAKSI PINK FHASION</center><hr/> ";
				
   $edit = mysql_query("SELECT * FROM pembeli WHERE id_pembeli='$_GET[id]'");
    $r    = mysql_fetch_array($edit);
    $tanggal=($r[tgl_beli]);
		
     // tampilkan rincian produk yang di order
  $sql2=mysql_query("SELECT * FROM pembeli,produk
                     WHERE pembeli.id_pembeli=produk.kode_barang ='$_GET[id]'");
  
echo "<table width=100% cellpadding=6>
          <tr style='color:#OOOOO; height:35px;' bgcolor=#FFFFF0><th>Nama Barang</th><th>Harga</th><th>Jumlah Beli</th><th>Jumlah Harga</th></tr>";  
  while($s=mysql_fetch_array($sql2)){
     // rumus untuk menghitung subtotal dan total	
    $sub    = $s[harga] * $s[jlh_beli];
	$subtotal = $sub;
	$total = $sub + $sub;
	
    echo "<tr align='center'><td>$s[nama_barang]</td><td>$s[harga]</td><td>$s[jlh_beli]</td><td>$subtotal</td></tr>";
  }   
		
echo " <table width=100%>
	  <tr><td>Total</td><td align='right'> Rp. <b>$total</b></td></tr>   
      </table>
	  
	  
			</table><br/><tr><td><br/><span style='float:right; text-align:center;'> PINK FHASION, $tgl_sekarang <br/>
										Karyawan<br/></br></br>
								(.............................................)
								<br/>$_SESSION[namalengkap]</span></td></tr>";
	  
?>