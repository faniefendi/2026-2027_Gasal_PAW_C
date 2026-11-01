
<?php
include "koneksi.php";

$id = (int) $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$query = mysqli_prepare($koneksi,
    "UPDATE pelanggan
     SET nama=?, jenis_kelamin=?, telp=?, alamat=?
     WHERE id=?");

mysqli_stmt_bind_param($query, "ssssi",
    $nama, $jenis_kelamin, $telp, $alamat, $id);

if (mysqli_stmt_execute($query)) {
    header("Location: index.php");
    exit;
} else {
    echo "Gagal mengubah data: " . mysqli_error($koneksi);
}
?>
