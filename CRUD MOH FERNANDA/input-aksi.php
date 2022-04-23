<?php 
include 'koneksi.php';
$kat = $_POST['kategori'];
$nama = $_POST['nama'];
$beli = $_POST['beli'];
$jual = $_POST['jual'];
$stok = $_POST['stok'];

mysql_query("INSERT INTO barang  VALUES('','$kat','nama','beli','jual','
	stok')");

	header("location:index.php?pesan=input");
?>