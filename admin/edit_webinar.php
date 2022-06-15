<?php
session_start();

include "connect.php";

$id = $_POST['id'];
$topik = $_POST['topik'];
$jam = $_POST['jam'];
$tanggal = $_POST['tanggal'];
$harga = $_POST['harga'];

$sql = "UPDATE webinar set topik = '$topik', jam = '$jam', tanggal = '$tanggal', harga = '$harga' WHERE id = $id";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) {
    $_SESSION["message"] = "Webinar gagal diubah";
    header("Location: app_admin.php?page=page_edit_webinar&id=$id");
} else {
    $_SESSION["success"] = true;
    $_SESSION["message"] = "Webinar berhasil diubah";
    header("Location: app_admin.php?page=webinar_table");
}
