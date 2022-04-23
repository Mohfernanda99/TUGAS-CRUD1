
<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP dan MYSQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
	<h2>Menampilkan Data dari Database</h2>

</div>
<br/>
<a href="index.php">lihat Semua Data </a>
<br/>
<h3>Input data baru</h3>
<form action="input-aksi.php" method="post">
<table>
	<tr>
		<td>Kategori</td>
		<td><input type="text" name="kategori"></td>

	</tr>
	<tr>
		
		<td>Nama</td>
		<td><input type="text" name="nama"></td>

	</tr>
<tr>
		
		<td>Harga Beli</td>
		<td><input type="text" name="beli"></td>

	</tr>
		<tr>	
		<td>Harga Jual</td>
		<td><input type="text" name="jual"></td>
		</tr>
		<tr>	
		<td>Stok</td>
		<td><input type="text" name="stok"></td>
		</tr>
		<tr>	
		<td></td>
		<td><input type="text" name="simpan"></td>
		</tr>
	

</table>
	
</form>

</body>
</html>