<style type="text/css">
pre, xmp, plaintext, listing {
    display: none;
    font-family: monospace;
    white-space: pre;
    margin: 1em 0px;
}
</style>
<html>
<body>

<?php

/*
Buatlah algoritam linear search, misal saya punya data array ['1','4','2','3','5','9','8','7']
saya ingin mencari angka 3 , ada di index berapa angka 3 
Dan buat juga fungsi untuk mengurutkan angka nya dari yang terbesar ke terkecil dan dari terkecil ke terbesar
*/

$angka_acak = array('1','4','2','3','5','9','8','7');
sort($angka_acak);
$menghitung_array_angka = count($angka_acak);
for($urutan = 0; $urutan < $menghitung_array_angka; $urutan++) {
    echo $angka_acak[$urutan];
    echo "<br>";
}
?>

</body>
</html>
