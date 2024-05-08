<?php
// env: dev
// $host     = "localhost";            
// $username = "root";
// $password = "";
// $database = "db_siswa";

// env: prod
$host     = "sql101.infinityfree.com";            
$username = "if0_36443573";
$password = "hueEksiFvXwMeUP";
$database = "if0_36443573_db_siswa";

// buat koneksi database
$mysqli = new mysqli($host, $username, $password, $database);

// cek koneksi
// jika koneksi gagal 
if ($mysqli->connect_error) {
	// tampilkan pesan gagal koneksi
    die('Koneksi Database Gagal : '.$mysqli->connect_error);
}