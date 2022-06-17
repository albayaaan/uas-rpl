<?php
session_start();

include "connect.php";

$id = $_SESSION['user'];
$konseling = $_POST['konseling'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$noWa = $_POST['noWa'];
$gender = $_POST['gender'];
$tgl_lahir = $_POST['tgl_lahir'];
$pembayaran = $_POST['pembayaran'];
$uploadOk = 1;

if (isset($_FILES["bukti"])) {
    $check = getimagesize($_FILES["bukti"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

if ($uploadOk == 1) {
    $temp = explode(".", $_FILES["bukti"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    move_uploaded_file($_FILES["bukti"]["tmp_name"], "../uploads/bukti-konseling/" . $newfilename);
    $sql = "INSERT INTO pesan_konseling VALUES(null, '$konseling', '$id', '$nama', '$email', '$noWa', '$gender', '$tgl_lahir', '$pembayaran', '$newfilename')";
    $hasil = mysqli_query($conn, $sql);
    if (!$hasil) {
        $_SESSION["message"] = "Gagal mendaftar konseling";
    } else {
        $_SESSION["success"] = true;
        $_SESSION["message"] = "Berhasil mendaftar konseling, silahkan menunggu konfirmasi selanjutnya melalui WhatsApp";
        if (isset($_SESSION['post'])) {
            unset($_SESSION['post']);
        }
    }
    header("Location: app.php?page=home");
} else {
    $_SESSION["message"] = "Bukti harus berupa gambar";
    $_SESSION["post"] = $_POST;
    header("Location: app.php?page=form_konseling&id=$konseling");
}
