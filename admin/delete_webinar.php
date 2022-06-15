<?php
session_start();
include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM webinar WHERE id=$id";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) {
    $_SESSION["message"] = "Webinar gagal dihapus";
} else {
    $_SESSION["success"] = true;
    $_SESSION["message"] = "Webinar berhasil dihapus";
}
header("Location: app_admin.php?page=webinar_table");
