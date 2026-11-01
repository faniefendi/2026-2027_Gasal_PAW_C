
<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM pelanggan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
</head>
<body>

    <h2>Data Pelanggan</h2>

    <a href="tambah.php">+ Tambah Pelanggan</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php while ($data = mysqli_fetch_assoc($query)) { ?>

        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo htmlspecialchars($data['nama']); ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo htmlspecialchars($data['telp']); ?></td>
            <td><?php echo htmlspecialchars($data['alamat']); ?></td>

            <td>
                <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |

                <a href="hapus.php?id=<?php echo $data['id']; ?>"
                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>

