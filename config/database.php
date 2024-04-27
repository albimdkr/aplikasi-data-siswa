<?php
// env: dev
$host     = "localhost";            
$username = "root";
$password = "";
$database = "db_siswa";

// env: prod
// $host     = "sql202.infinityfree.com";            
// $username = "if0_36442778";
// $password = "3xfBvUoqwbJz";
// $database = "if0_36442778_db_siswa";

// buat koneksi database
$mysqli = new mysqli($host, $username, $password, $database);

// cek koneksi
// jika koneksi gagal 
if ($mysqli->connect_error) {
	// tampilkan pesan gagal koneksi
    die('Koneksi Database Gagal : '.$mysqli->connect_error);
}