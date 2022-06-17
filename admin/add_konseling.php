<?php
session_start();

include "connect.php";

$admin = $_SESSION['admin'];
$paket = $_POST['paket'];
$harga = $_POST['harga'];
$uploadOk = 1;

if (isset($_FILES["poster"])) {
    $check = getimagesize($_FILES["poster"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

if ($uploadOk == 1) {
    $temp = explode(".", $_FILES["poster"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    move_uploaded_file($_FILES["poster"]["tmp_name"], "../uploads/konseling/" . $newfilename);

    $sql = "INSERT INTO konseling VALUES(null, '$admin', '$paket', '$harga', '$newfilename')";
    $hasil = mysqli_query($conn, $sql);
    if (!$hasil) {
        $_SESSION["message"] = "Konseling gagal ditambahkan";
    } else {
        $_SESSION["success"] = true;
        $_SESSION["message"] = "Konseling berhasil ditambahkan";
        if (isset($_SESSION['post'])) {
            unset($_SESSION['post']);
        }
    }
    header("Location: app_admin.php?page=konseling_table");
} else {
    $_SESSION["message"] = "Poster harus berupa gambar";
    $_SESSION["post"] = $_POST;
    header("Location: app_admin.php?page=page_add_konseling");
}
