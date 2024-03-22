<?php
$server = "localhost";
$user = "savetasi_root";
$pass = "savetangerang2022";
$db = "savetasi_saveta";

$koneksi = mysqli_connect($server,$user,$pass,$db);

if (mysqli_connect_error()){
    echo "gagal konek ".mysqli_connect_error();
}
?>