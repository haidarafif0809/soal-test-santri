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



function jam_pasir($tinggi) {
    
    $str = '';
    $pagar = '#';
    $spasi = '';
    for ($i = $tinggi + 3; $i > 0; $i = $i - 2) {
        echo $spasi;
        for ($ii = 1; $ii <= $i; $ii++) {
            echo $pagar;
        }
        echo "\n";
        $spasi .= ' ';
    }

    $no = 2;
    for ($i = 1; $i <= $tinggi + 3; $i += 2) {
        for ($s = $tinggi; $s >= $no; $s -= 2) {
            echo " ";
        }
        $no += 3;
        for ($ii = 1; $ii <= $i; $ii++) {
            echo $pagar;
        }
        echo "\n";

        if ($i == 1) continue;
    }
}

jam_pasir(5);


?>
