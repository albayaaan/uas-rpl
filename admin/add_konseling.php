<?php
session_start();

include "connect.php";

$paket = $_POST['paket'];
$harga = $_POST['harga'];

$sql = "INSERT INTO konseling VALUES(null, '$paket', '$harga')";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) {
    $_SESSION["message"] = "Konseling gagal ditambahkan";
} else {
    $_SESSION["success"] = true;
    $_SESSION["message"] = "Konseling berhasil ditambahkan";
}
header("Location: app_admin.php?page=page_add_konseling");
