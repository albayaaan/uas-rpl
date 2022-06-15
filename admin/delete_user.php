<?php
session_start();
include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id=$id";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) {
    $_SESSION["message"] = "User gagal dihapus";
} else {
    $_SESSION["success"] = true;
    $_SESSION["message"] = "User berhasil dihapus";
}
header("Location: app_admin.php?page=user_table");
