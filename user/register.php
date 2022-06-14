<?php
session_start();

include "connect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email='$email'";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    $_SESSION["message"] = "Email telah digunakan";
    header("Location: page_register.php");
} else {
    $query = mysqli_query($conn, "INSERT INTO user VALUES(null, '$name', '$email', '$password')");
    $_SESSION["success"] = true;
    $_SESSION["message"] = "Akun berhasil dibuat";
    header("Location: page_login.php");
}
