<?php
require_once "config/database.php";

session_start();

$email = $_POST["email"];
$password = $_POST["password"];

// sql
$query_sql = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$password'";

// result
$result = mysqli_query($mysqli, $query_sql);

if (mysqli_num_rows($result) > 0 ) {
    // Autentikasi berhasil, simpan informasi login ke session
    $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $email;
    header("Location: dashboard.php");
    exit();
} else {
    echo '<script>alert("Email Atau Password Tidak Sesuai!"); window.location.href = "login.php";</script>';
}
?>
