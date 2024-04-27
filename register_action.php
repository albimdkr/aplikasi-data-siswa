<?php

require_once "config/database.php";
require_once "helper/fungsi_tanggal_indo.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $role = isset($_POST["role"]) ? $_POST["role"] : "Operator";

    if (!empty($nama) && !empty($email) && !empty($password)) {
        $tgl_daftar = date("Y-m-d");
        $tgl_daftar_indo = tanggal_indo($tgl_daftar);

        $query_sql = "INSERT INTO `tbl_user`(`nama`, `email`, `password`,`role` ,`tgl_daftar`) VALUES ('$nama','$email','$password','$role','$tgl_daftar')";
        $result = mysqli_query($mysqli, $query_sql);

        if ($result) {
            echo '<script>alert("User berhasil ditambahkan!"); window.location.href = "register.php";</script>';
        } else {
            echo "Register Gagal: " . mysqli_error($mysqli);
        }
    } else {
        echo '<script>alert("Gagal, Harap lengkapi semua form!"); window.location.href = "register.php";</script>';
    }
}

?>
