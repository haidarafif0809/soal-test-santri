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

    $jam_naik = 1;

    for ($a = $tinggi_jam; $a >= 1; $a--):
        echo "<br>";
        for ($b = $a; $b <= $tinggi_jam; $b++):

            echo "&nbsp;&nbsp;";
        endfor;

        for ($c = $a; $c >= 1; $c--):
            echo "#";
            // echo $c;
        endfor;

        for ($d = $a; $d > 1; $d--):
            echo "#";
            // echo $d;
        endfor;
        $jam_naik++;
    endfor;

    $jam_turun = 1;

    //ambil angka dari satu sampai dg $tinggi_jam {1,2,3,4,5,6,7,8,9}
    for ($e = 1; $e <= $tinggi_jam; $e++):
        echo "<br>";

        //kasih spasi
        for ($f = $e; $f <= $tinggi_jam; $f++):

            echo "&nbsp;&nbsp;";
        endfor;
        //
        for ($g = 1; $g <= $jam_turun; $g++):
            echo "#";
            // echo $g;
        endfor;

        //
        for ($h = $jam_turun; $h > 1; $h--):
            echo "#";
            // echo $h;
        endfor;
        $jam_turun++;
    endfor;
}
jamPasir(9);
