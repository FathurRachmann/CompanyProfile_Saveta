<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<a href="{{url ('tambah')}}">+ TAMBAH PRODUK</a>
	<br/>
	<br/>
	<table border="1" style="margin-bottom:30px;">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Kategori</th>
			<th>Deskripsi</th>
			<th>Nama Gambar</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from produk");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['name']; ?></td>
				<td><?php echo $d['price']; ?></td>
				<td><?php echo $d['category']; ?></td>
				<td><?php echo $d['description']; ?></td>
				<td><?php echo $d['image']; ?></td>
				<td>
					<a href="{{url ('edit?id='.$d['id'])}}">EDIT</a>
					<a href="{{url ('hapus?id='.$d['id'])}}">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>