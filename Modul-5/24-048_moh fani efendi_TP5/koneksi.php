<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_modul5");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>