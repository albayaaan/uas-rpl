<?php
session_start();

include "connect.php";

$topik = $_POST['topik'];
$jam = $_POST['jam'];
$tanggal = $_POST['tanggal'];
$harga = $_POST['harga'];

$sql = "INSERT INTO webinar VALUES(null, '$topik', '$jam', '$tanggal', '$harga')";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) {
    $_SESSION["message"] = "Webinar gagal ditambahkan";
} else {
    $_SESSION["success"] = true;
    $_SESSION["message"] = "Webinar berhasil ditambahkan";
}
header("Location: app_admin.php?page=page_add_webinar");
