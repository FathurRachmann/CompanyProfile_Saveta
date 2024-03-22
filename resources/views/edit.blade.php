<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
</head>
<body>
 	<a href="{{url ('halamanadmin')}}">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from produk where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="{{url ('update')}}" enctype="multipart/form-data">
		@csrf
	    @method('PUT')
			<table>
				<tr>			
					<td>Nama Produk</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="name" value="<?php echo $d['name']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="number" name="price" value="<?php echo $d['price']; ?>" required><a>*masukan harga tanpa titik dan 3 digit angka 0, contoh harga 10.000 masukan angka 10 saja.</a></td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td><input type="text" name="category" value="<?php echo $d['category']; ?>"required></td>
				</tr>
                <tr>
					<td>Deskripsi</td>
					<td><input type="text" name="description" value="<?php echo $d['description']; ?>"required></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td>
						<div class="image">
							<input type="file" class="form-control" required name="image">
						</div>
				</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>