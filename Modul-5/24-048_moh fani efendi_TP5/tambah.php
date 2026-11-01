
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
</head>
<body>

    <h2>Tambah Data Pelanggan</h2>

    <form action="simpan.php" method="POST">

        Nama:
        <input type="text" name="nama" required>
        <br><br>

        Jenis Kelamin:
        <select name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        <br><br>

        Telepon:
        <input type="text" name="telp">
        <br><br>

        Alamat:
        <textarea name="alamat"></textarea>
        <br><br>

        <button type="submit">Simpan</button>
        <a href="index.php">Kembali</a>

    </form>

</body>
</html>

