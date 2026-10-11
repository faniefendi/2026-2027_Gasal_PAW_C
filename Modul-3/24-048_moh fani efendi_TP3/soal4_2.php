
<?php
$weight = array(
    "Andy" => "60",
    "Barry" => "65",
    "Charlie" => "70"
);

$nama = array_keys($weight);
$arrlength = count($weight);

for ($x = 0; $x < $arrlength; $x++) {
    echo $nama[$x] . " memiliki berat " . $weight[$nama[$x]] . " kg<br>";
}
?>
