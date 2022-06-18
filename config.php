<?php
$server = "localhost";
$user = "root";
$pass =
$nama_db = "db_basdat2";

$db = mysqli_connect($server, $user, $pass, $nama_db);

if (!$db) {
    die("Koneksi gagal. Error di " . mysqli_connect_error());
}
?>
