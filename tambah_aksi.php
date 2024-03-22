<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$description = $_POST['description'];

// menginput data ke database
mysqli_query($koneksi,"insert into produk (name, price, category, description) values('$name','$price','$category','$description')");
 
// mengalihkan halaman kembali ke index.php
header("location:list.php");
 
?>