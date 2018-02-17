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
    $hasil = "#";
    $spasi = "&nbsp";
    for ($i = $angka; $i >= 1; $i--) {
        for ($a = $i; $a <= $angka; $a++) {
            echo $spasi;
        }
        for ($b = 1; $b <= $i; $b += 1) {
            echo $spasi . "" . $hasil;
        }

        echo "\n";
    }
    for ($i = 2; $i <= $angka; $i++) {
        for ($a = $i; $a <= $angka; $a++) {
            echo $spasi;
        }
        for ($b = 1; $b <= $i; $b += 1) {
            echo $spasi . "" . $hasil;
        }

        echo "\n";
    }
}

jamPasir(4);
