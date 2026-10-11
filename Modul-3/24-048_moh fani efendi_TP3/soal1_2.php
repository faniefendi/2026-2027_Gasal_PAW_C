
<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

array_push($fruits, "Durian", "Mango", "Orange", "Banana", "Grape");

unset($fruits[1]);

echo "Buah pada indeks terakhir: " . end($fruits);
?>
