
<?php
include "koneksi.php";

$id = (int) $_GET['id'];

$query = mysqli_prepare($koneksi,
    "DELETE FROM pelanggan WHERE id=?");

mysqli_stmt_bind_param($query, "i", $id);

if (mysqli_stmt_execute($query)) {
    header("Location: index.php");
    exit;
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>
