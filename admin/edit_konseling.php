<?php
session_start();

include "connect.php";

$id = $_POST['id'];
$paket = $_POST['paket'];
$harga = $_POST['harga'];

$sql = "UPDATE konseling set paket = '$paket', harga = '$harga' WHERE id = $id";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) {
    $_SESSION["message"] = "Konseling gagal diubah";
    header("Location: app_admin.php?page=page_edit_konseling&id=$id");
} else {
    $_SESSION["success"] = true;
    $_SESSION["message"] = "Konseling berhasil diubah";
    header("Location: app_admin.php?page=konseling_table");
}
