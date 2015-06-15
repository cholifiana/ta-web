<?php
include('config.php');
$kode_admin = $_GET['kode_admin'];
$query = mysql_query("select * from dataadmin where kode_admin=$kode_admin");
while ($q = mysql_fetch_array($query))  {
    ?>
	<?php include('nav-admin.php'); ?>
<html>
<title> tambah admin</title>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="form">
    <table>
        <form action="editadmin-aksi.php" method="post">
            <tr>
                <td>Kode Admin</td>
                <td><input type="text" value="<?php echo $q['kode_admin'] ?>" name="kode_admin"></td>
            </tr>
            <tr>
                <td>Nama Admin</td>
                <td><input type="text" name="nama_admin" value="<?php echo $q['nama_admin'] ?>"></td>
            </tr>
            <tr>
                <td>No Tlpn</td>
                <td><input type="text" name="no" value="<?php echo $q['no'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $q['alamat']?>"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                 <td><input type="text" name="jabatan" value="<?php echo $q['jabatan'] ?>"></td>
            </tr> 
			<tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $q['password']?>"></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="update"></td>
            </tr>
        </form>
    </table>
		</div>
	<div id="footer">
	Eva 2015
	</div>
	</body>
    <?php
}
?>