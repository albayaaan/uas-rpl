<?php
session_start();
include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM konseling WHERE id=$id";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) {
    $_SESSION["message"] = "Konseling gagal dihapus";
} else {
    $_SESSION["success"] = true;
    $_SESSION["message"] = "Konseling berhasil dihapus";
}
header("Location: app_admin.php?page=konseling_table");
