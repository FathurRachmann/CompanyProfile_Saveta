<?php
$connection = mysqli_connect('localhost', 'savetasi_root', 'savetangerang2022');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'savetasi_saveta');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}