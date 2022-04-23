
<!DOCTYPE html>
<html>
<head>
<title>Membuat CRUD Dengan PHP dan MySQL</title>
<link rel="stulesheet" type="text/css" hreg="style.css">
</head>
<body>
<div class="judul">
<h2>MEnampilkan Data dari Database</h2>
</div>
<?php
IF(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "data berhasil di input.";
	}elseif ($pesan == "update") {
		echo "Data Berhasil di update.";
		
	}elseif ($pesan =="hapus") {
		echo "Data berhasil di hapus";
		# code...
	}
}

?>
<br/>
<a class="tombol" href="input.php">+ Tambah Data Baru</a>
<h3>Data Barang</h3>
<table border="1" class="table">
<tr>
	<th>ID</th>
	<th>Kategori</th>
	<th>Nama</th>
	<th>Harga Beli</th>
	<th>Harga Jual</th>
	<th>Stock</th>
	<th>Aksi</th>


<?php
include "koneksi.php";
$brg = mysql_query("SELECT * FROM Barang")or die(mysql_error());
$nomor = 1;
while ($data = mysql_fetch_array($brg)) {
?>
<tr>
	<td><?php echo $nomor++; ?></td>
	<td><?php echo $data['Kategori'];?></td>
	<td><?php echo $data['nama'];?></td>
	<td align="right"><?php echo $data['hrg_beli'];?></td>
	<td align="right"><?php echo $data['hrg_jual'];?></td>
	<td><?php echo $data['stok'];?></td>
	<td>
		<a class="edit" href="edit.php?id=<?php echo $data['id'];?>">Edit</a>
		<a class="hapus" href="hapus.php?id=<?php echo $data['id'];?>">Hapus</a>

	</td>
</tr>

<?php } ?>

</tr>
</table>
</body>
</html>	

</tr>	
</table>





