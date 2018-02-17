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
function jamPasir($angka)
{
    $string  = '';
    $string2 = '';
    for ($i = $angka; $i >= 1; $i--) {
        for ($string = 1; $string <= $i; $string++) {
            echo $string;
        }
        // $string = $string . $i;
        echo "\n";
    }
    for ($i = 1; $i <= $angka; $i++) {
        for ($string2 = 1; $string2 <= $i; $string2++) {
            echo $string2;
        }
        // $string = $string . $i;
        echo "\n";
    }
}
jamPasir(5);
