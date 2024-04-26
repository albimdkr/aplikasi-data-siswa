<?php

require_once "config/database.php";

$email = $_POST["email"];
$password = $_POST["password"];

// sql
$query_sql = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$password'";

// result
$result = mysqli_query($mysqli, $query_sql);

if (mysqli_num_rows($result) > 0 ) {
    header("Location: dashboard.php");
} else {
    echo "<center><h1>Email atau Password anda salah!</h1>
            <button><strong><a href='index.php'>Login</a><strong/></button></center>";
}
?>
