<?php
 #######
  #####
   ###
    #
   ###
  #####
 #######

// pertama buat dulu bagian atas

function angka($angka){

	for ($i = 1; $i <= $angka; $i++) {
		for ($a = 0; $a <= $i; $a++) {
			echo "&nbsp;&nbsp;";
		}
		for ($b = $i; $b < $angka; $b++) {
			echo "#";
		}
		for ($c = $i; $c < $angka + 1; $c++) {
			echo "#";
		} echo "<br>";
	}

	for ($i = 1; $i <= $angka; $i++) {
		for ($a = $angka + 1; $a >= $i; $a--) {
			echo "&nbsp;&nbsp;";
		}
		for ($b = 1; $b <= $i; $b++) {
			echo "#";
		} for ($l = 1; $l < $i; $l++) {
			echo "#";
		} echo "<br ?>";
	}

}
angka(10);

?>

