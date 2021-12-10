<?php
// KONEKSI MYSQLi
// koneksi = untuk konek ke database aplikasi sisega
// ---> mysqli_connect("namahost","username_database","password_database","nama_database-si-s3ga")
// koneksi 2 = untuk koneksi ke database aplikasi SIPP PA Nanga Bulik 
// ---> mysqli_connect("namahost","username_database","password_database","nama_database SIPP")

$koneksi= mysqli_connect("localhost","root","","s3ga") or die("Tidak bisa terhubungan ke database");
// ---> ubah dibawah ini dengan koneksi SIPP Nanga Bulik
//$koneksi2= mysqli_connect("192.168.88.76","admin","admin123!","mantap2") or die("Tidak bisa terhubungan ke database SIPP");


// koneksi 3 = untuk koneksi ke database aplikasi Chat
// ---> mysqli_connect("namahost","username_database","password_database","nama_database SIPP")
//$dbHost ='localhost';
//$dbUsername ='sisega';
//$dbPassword ='sisega';
//$dbDatabase ='sisega';
$conn=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbDatabase);

?>