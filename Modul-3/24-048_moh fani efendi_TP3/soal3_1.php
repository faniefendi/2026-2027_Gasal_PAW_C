
<?php
$height = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170"
);

$height["David"] = "180";
$height["Evan"] = "172";
$height["Fajar"] = "168";
$height["Gilang"] = "175";
$height["Hendra"] = "178";

echo "Tinggi terakhir sebelum dihapus: " . end($height) . " cm<br>";

unset($height["Fajar"]);

echo "Tinggi terakhir setelah dihapus: " . end($height) . " cm";
?>
