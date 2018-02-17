<?php
/*
Buatlah algoritam linear search, misal saya punya data array ['1','4','2','3','5','9','8','7']
saya ingin mencari angka 3 , ada di index berapa angka 3 
Dan buat juga fungsi untuk mengurutkan angka nya dari yang terbesar ke terkecil dan dari terkecil ke terbesar
*/



function cariAngka($angka){
	$array = ['1','4','2','3','5','9','8','7'];
	print_r($array); 
	$cariIndexAngka = "";
	for($i=0;$i<count($array);$i++){
		if ($array[$i] == $angka) {

			$cariIndexAngka.= "Angka ".$angka ." ada di index " .$i;
		}
	}
	if ($cariIndexAngka == "") {
		echo "<br>-1 !, Angka yg Anda Cari tidak ditemukan ";
	}else{
		echo "<br>".$cariIndexAngka."<br>"."<br>";
	}
}
cariAngka(8);

function urutkanArrayTerbesarKeTerkecil(){
	$array = ['1','4','2','3','5','9','8','7'];
	$angka = 1;
	for($i=0;$i<count($array);$i++){

		if ($array[$i] > $angka) {
			echo $array[$i];
		}

	}
}

urutkanArrayTerbesarKeTerkecil();
?>