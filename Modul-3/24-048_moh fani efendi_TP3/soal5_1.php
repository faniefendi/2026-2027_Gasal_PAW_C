
<?php
$mahasiswa = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665")
);

echo "Data awal:<br>";
echo "students = <br>";

foreach ($mahasiswa as $data) {
    echo '("' . $data[0] . '", "' . $data[1] . '", "' . $data[2] . '")<br>';
}

echo "<br>";

array_push($mahasiswa,
    array("Daniel", "220404", "0812345611"),
    array("Elena", "220405", "0812345622"),
    array("Fiona", "220406", "0812345633"),
    array("Gabe", "220407", "0812345644"),
    array("Hannah", "220408", "0812345655")
);

echo "Data setelah ditambah 5 data lain:<br>";
echo "students = <br>";

foreach ($mahasiswa as $data) {
    echo '("' . $data[0] . '", "' . $data[1] . '", "' . $data[2] . '")<br>';
}
?>

<br>

<table border="1">
    <tr>
        <th>Name</th>
        <th>NIM</th>
        <th>Mobile</th>
    </tr>

    <?php
    for ($x = 0; $x < count($mahasiswa); $x++) {
        echo "<tr>";
        echo "<td>" . $mahasiswa[$x][0] . "</td>";
        echo "<td>" . $mahasiswa[$x][1] . "</td>";
        echo "<td>" . $mahasiswa[$x][2] . "</td>";
        echo "</tr>";
    }
    ?>
</table>


