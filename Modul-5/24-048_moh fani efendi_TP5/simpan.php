
<?php
include "koneksi.php";

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$query = mysqli_prepare($koneksi,
    "INSERT INTO pelanggan (nama, jenis_kelamin, telp, alamat)
     VALUES (?, ?, ?, ?)");

mysqli_stmt_bind_param($query, "ssss",
    $nama, $jenis_kelamin, $telp, $alamat);

if (mysqli_stmt_execute($query)) {
    header("Location: index.php");
    exit;
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>
