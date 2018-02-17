<?php
//Membuat Jam Pasir, ada sebuah function yang menerima sebuah angka, angka tersebut jadi patokan seberapa tinggi jam pasir nya.
/*
contoh tingginya 4 maka hasilnya ketika di jalankan
 #######
  #####
   ###
    #
   ###
  #####
 #######
*/

function jamPasir($a){
	for ($i = $a; $i > 0; $i--) {
		for ($j = 1; $j <= $i; $j++) {
			echo $j;
		}
		echo "\n";
	}
}

jamPasir(7)
?>
