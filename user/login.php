<?php
session_start();

include "connect.php";

$email = $_POST["email"];
$password = $_POST["password"];

$login = mysqli_query($conn, "SELECT * FROM user WHERE `email` = '$email' AND `password` = '$password'");

if (mysqli_num_rows($login) > 0) {
    $data = mysqli_fetch_array($login);

    $_SESSION["login"] = true;
    $_SESSION["name"] = $data["name"];
    $_SESSION["user"] = $data["id"];

    header("Location: app.php?page=home");
} else {
    $_SESSION["message"] = "Email atau Password salah";
    header("Location: page_login.php");
}
