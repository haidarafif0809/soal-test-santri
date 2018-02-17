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

function jamPasir($tinggi_jam)
{

    for ($k = $tinggi_jam; $k >= 1; $k--):
        for ($b = $k; $b <= $tinggi_jam; $b++):
            echo "&nbsp;";
        endfor;
        for ($l = 1; $l <= $k; $l += 1):
            echo "&nbsp;#";
        endfor;
        echo "\n";
    endfor;

    for ($i = 1; $i <= $tinggi_jam; $i++):
        for ($g = $i; $g <= $tinggi_jam; $g++):
            echo "&nbsp;";
        endfor;
        for ($j = 1; $j <= $i; $j++):
            echo "&nbsp;#";
        endfor;
        echo "\n";
    endfor;
}
jamPasir(9);
