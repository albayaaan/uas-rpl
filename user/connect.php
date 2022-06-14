<?php
$host = "localhost";
$user = "root";
$password = "";
$dbhome = "rpl";

$conn = mysqli_connect($host, $user, $password, $dbhome);
if (!$conn) {
    echo "Gagal konek database";
}
