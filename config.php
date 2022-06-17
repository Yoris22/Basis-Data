<?php
$server = "loccal host";
$user = "root";
$pass = "1q2w3e4r5t.";
$nama_db = "db_basdat2";

$db = mysqli_connect($server, $user, $pass, $nama_db);

if (!$db) {
    die("Koneksi gagal. Error di " . mysqli_connect_error());
} else {
    // echo "Koneksi aman";
}
?>
