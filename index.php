<?php
$angka = array(1, 2, 5, 6, 9, 8, 3, 4);
sort($angka);
// menampilkan jumlah karakter
$jumlah = count($angka);
for ($i = 0; $i < $jumlah; $i++) {
    echo $angka[$i];
}
