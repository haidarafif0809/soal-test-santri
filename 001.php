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
function jamPasir($tinggi){
		//Jam Pasir Atas Terjadi Pengurangan objek pagar
       for ($spasi = -2; $spasi <= $tinggi - 2; $spasi++) {
            for ($jarak = 0; $jarak <= $spasi; $jarak++) {
               echo "&nbsp;&nbsp;";
            }
             for ($objek_hastag_awal = $spasi; $objek_hastag_awal < $tinggi - 1; $objek_hastag_awal++) {
               echo "#";
            }
            for ($objek_hastag_perulangan = $spasi; $objek_hastag_perulangan < $tinggi - 2; $objek_hastag_perulangan++) {
               echo "#";
            } 
               echo "<br>";
       }
       for ($spasi = 2; $spasi <= $tinggi - 0; $spasi++) {
           for ($jarak = $tinggi - 1; $jarak >= $spasi; $jarak--) {
              echo "&nbsp;&nbsp;";
           }
           for ($objek_hastag_awal = 1; $objek_hastag_awal <= $spasi; $objek_hastag_awal++) {
              echo "#";
            } 
            for ($objek_hastag_perulangan = 1; $objek_hastag_perulangan < $spasi; $objek_hastag_perulangan++) {
              echo "#";
            } 
           	  echo "<br>";
    	}
}
jamPasir(4);
?>
</body>
</html>
