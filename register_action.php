<?php

require_once "config/database.php";
require_once "helper/fungsi_tanggal_indo.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    if (!empty($nama) && !empty($email) && !empty($password)) {
        $tgl_daftar = date("Y-m-d");
        $tgl_daftar_indo = tanggal_indo($tgl_daftar);

        $query_sql = "INSERT INTO `tbl_user`(`nama`, `email`, `password`, `tgl_daftar`) VALUES ('$nama','$email','$password','$tgl_daftar')";
        $result = mysqli_query($mysqli, $query_sql);

        if ($result) {
            header("Location: index.php");
            exit();
        } else {
            echo "Register Gagal: " . mysqli_error($mysqli);
        }
    } else {
        echo "Harap lengkapi semua field.";
    }
}
?>
