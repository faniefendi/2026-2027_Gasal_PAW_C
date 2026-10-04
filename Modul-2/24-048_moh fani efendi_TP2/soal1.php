<?php
$matkul = ["PTI", "ALPRO", "DPW", "STRUKDAT", "JARKOM", "PAW", "PSBF", "RPL"];
$praktikum = ["JARKOM", "PAW"];

for ($i=0; $i < 8; $i++) { 
	if ($matkul[$i] == "JARKOM" || $matkul[$i] == "PAW" ) {
		echo "saya sedang ambil matkul" . $matkul[$i] . "sama praktikumnya<br>";

	}
	elseif ($matkul[$i] == "PSBF" || $matkul[$i] == "RPL") {
		echo "saya belum mengambil matkul" . $matkul[$i] . "<br>";
	}
	else {
		 echo "Saya sudah mengambil matkul " . $matkul[$i] . " semester lalu<br>";

	}

}

?>