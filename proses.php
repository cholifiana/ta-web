<?php
include 'config.php';
$username=$_POST['username'];
$password=$_POST['password'];
$masuk=$_POST['masuk'];

if($masuk=='Admin'){
	$query=mysql_query("select * from admin where username='$username'");
	$cek=mysql_num_rows($query);
	if($cek==1){
	header("location:produk.php");
	}else{
	echo "gagal login";
	}
	
}else if($masuk=='Kasir'){
	$query=mysql_query("select * from dataadmin where nama_admin='$username'");
	$cek=mysql_num_rows($query);
	if($cek==1){
	header("location:produk-kasir.php");
	}else{
	echo "gagal login";
	}
}


?>