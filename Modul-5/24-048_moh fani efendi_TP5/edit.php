
<?php
include "koneksi.php";

$id = (int) $_GET['id'];

$query = mysqli_query($koneksi,
    "SELECT * FROM pelanggan WHERE id=$id");

$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data pelanggan tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pelanggan</title>
</head>
<body>

    <h2>Edit Data Pelanggan</h2>

    <form action="update.php" method="POST">

        <input type="hidden" name="id"
        value="<?php echo $data['id']; ?>">

        Nama:
        <input type="text" name="nama"
        value="<?php echo htmlspecialchars($data['nama']); ?>" required>
        <br><br>

        Jenis Kelamin:
        <select name="jenis_kelamin" required>

            <option value="L"
            <?php if ($data['jenis_kelamin'] == 'L') echo 'selected'; ?>>
                Laki-laki
            </option>

            <option value="P"
            <?php if ($data['jenis_kelamin'] == 'P') echo 'selected'; ?>>
                Perempuan
            </option>

        </select>
        <br><br>

        Telepon:
        <input type="text" name="telp"
        value="<?php echo htmlspecialchars($data['telp']); ?>">
        <br><br>

        Alamat:
        <textarea name="alamat"><?php echo htmlspecialchars($data['alamat']); ?></textarea>
        <br><br>

        <button type="submit">Update</button>
        <a href="index.php">Kembali</a>

    </form>

</body>
</html>

