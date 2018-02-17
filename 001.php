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
echo "<br>";
function jamku($tinggi)
{
    for ($i = 0; $i <= $tinggi; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "&nbsp;&nbsp";
        }
        for ($k = $i; $k <= $tinggi - 1; $k++) {
            echo "#";
        }
        for ($l = $i; $l < $tinggi - 1; $l++) {
            echo "#";
        }
        echo "<br>";
    }
    for ($i = 0; $i <= $tinggi; $i++) {
        for ($j = $tinggi - 1; $j >= $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "#";
        }
        for ($l = 1; $l < $i; $l++) {
            echo "#";
        }
        echo "<br>";
    }
}
jamku(7);
// function jam($tinggi)
// {
//     // base case
//     // if ($tinggi == 0) {
//     //     return;
//     // }
//     $count = strlen($tinggi);
//     // echo $count;
//     $u = '';
//     for ($j = 1; $j <= $count; $j++) {
//         $u .= $j;
//         echo $u;
//         echo "<br>";
//     }
//     // for ($i = $count; $i >= 1; $i--) {
//     //     // $j = 1;
//     //     // $j++;
//     //     $hasil = substr($tinggi );
//     //     // $hasil2 = substr($hasil);
//     //     echo $hasil;
//     //     // echo $hasil2[$j];
//     //     // $j++;
//     //     echo "<br>";
//     // }
// }
// jam("12345");
