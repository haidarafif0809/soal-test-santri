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
    $hasil = "x";
    for ($i = 0; $i < $angka; $i++) {
        for ($a = $angka; $a > $i; $a--) {
            echo $hasil;
        }

        echo "\n";

    }
    for ($i = ($angka - 2); $i >= 0; $i--) {
        for ($a = $angka; $a > $i; $a--) {
            echo $hasil;
        }
        echo "\n";
    }
}

jamPasir(4);
