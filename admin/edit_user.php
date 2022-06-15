<?php
session_start();

include "connect.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE user set name = '$name', email = '$email', password = '$password' WHERE id = $id";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) {
    $_SESSION["message"] = "Data User gagal diubah";
    header("Location: app_admin.php?page=page_edit_user&id=$id");
} else {
    $_SESSION["success"] = true;
    $_SESSION["message"] = "Data User berhasil diubah";
    header("Location: app_admin.php?page=user_table");
}
