
<?php

// array_push()
$buah = array("A");
echo 'Array awal: ("A")<br>';

array_push($buah, "B");
echo "Hasil array_push: ";
echo implode(" ", $buah);

echo "<br><br>";

// array_merge()
$buah1 = array("A", "B");
$buah2 = array("C");

echo 'Array awal: ("A", "B")<br>';
$gabungan = array_merge($buah1, $buah2);

echo "Hasil array_merge: ";
echo implode(" ", $gabungan);

echo "<br><br>";

// array_values()
$data = array("x" => 1, "y" => 2);

echo 'Array awal: ("x" => 1, "y" => 2)<br>';
$hasil = array_values($data);

echo "Hasil array_values: ";
echo implode(" ", $hasil);

echo "<br><br>";

// array_search()
$huruf = array("A", "B", "C");

echo 'Mencari "B" pada array: ("A", "B", "C")<br>';
echo "Hasil array_search: ";
echo array_search("B", $huruf);

echo "<br><br>";

// array_filter()
$angka = array(0, 1, false, 2, "", 3, "array");

echo 'Array awal: (0, 1, false, 2, "", 3, "array")<br>';

$hasil = array_filter($angka);

echo "Hasil array_filter: ";
echo implode(" ", $hasil);

echo "<br><br>";

// sort dan rsort
$angka = array(3, 1, 2);

echo "Array awal: (3, 1, 2)<br>";

sort($angka);
echo "Hasil sort: ";
echo implode(" ", $angka);

rsort($angka);
echo "<br>Hasil rsort: ";
echo implode(" ", $angka);

echo "<br><br>";

// Sorting array asosiatif
$nilai = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

echo 'Array awal: ("Peter" => 35, "Ben" => 37, "Joe" => 43)<br>';

asort($nilai);
echo "Hasil asort: ";
foreach ($nilai as $nama => $angka) {
    echo "$nama => $angka, ";
}

arsort($nilai);
echo "<br>Hasil arsort: ";
foreach ($nilai as $nama => $angka) {
    echo "$nama => $angka, ";
}

ksort($nilai);
echo "<br>Hasil ksort: ";
foreach ($nilai as $nama => $angka) {
    echo "$nama => $angka, ";
}

krsort($nilai);
echo "<br>Hasil krsort: ";
foreach ($nilai as $nama => $angka) {
    echo "$nama => $angka, ";
}

?>
