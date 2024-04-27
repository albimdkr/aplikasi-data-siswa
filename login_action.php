<?php
require_once "config/database.php";

session_start();

$email = $_POST["email"];
$password = $_POST["password"];

// sql
$query_sql = "SELECT nama, role FROM tbl_user WHERE email = '$email' AND password = '$password'";

// result
$result = mysqli_query($mysqli, $query_sql);

if (mysqli_num_rows($result) > 0 ) {
    $user = mysqli_fetch_assoc($result); // Ambil data pengguna dari hasil query
    $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['nama'] = $user['nama']; // Simpan nama ke session
    $_SESSION['role'] = $user['role']; // Simpan role ke session
    header("Location: dashboard.php");
    exit();
} else {
    echo '<script>alert("Email Atau Password Tidak Sesuai!"); window.location.href = "login.php";</script>';
}

?>
