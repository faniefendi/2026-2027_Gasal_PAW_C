
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

foreach ($height as $nama => $tinggi) {
    echo $nama . " memiliki tinggi " . $tinggi . " cm<br>";
}
?>
