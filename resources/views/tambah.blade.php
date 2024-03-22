<html>
<head>
	<title>Tambah data</title>
</head>
<body>

	<a href="{{url ('halamanadmin')}}">KEMBALI</a>
	<br/>
	<br/>
	<h3>INPUT PRODUK</h3>
	<form method="post" action="{{url ('tambah_aksi')}}" enctype="multipart/form-data">
	    @csrf
	    @method('PUT')
		<table>
        <tr>			
			
			<tr>			
				<td>Nama</td>
                <input type="hidden" name="id">
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="price" required><a>*masukan harga tanpa titik dan 3 digit angka 0, contoh harga 10.000 masukan angka 10 saja.</a></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="category" required></td>
			</tr>
            <tr>
				<td>Deskripsi</td>
				<td><input type="text" name="description" required></td>
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
</body>
</html>