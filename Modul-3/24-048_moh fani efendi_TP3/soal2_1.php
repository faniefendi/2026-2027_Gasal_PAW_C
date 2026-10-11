
<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

array_push($fruits, "Durian", "Mango", "Orange", "Banana", "Grape");

$arrlength = count($fruits);

echo "Panjang array: " . $arrlength . "<br>";
echo "Daftar buah:<br>";

for ($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x] . "<br>";
}
?>
