<?php
/*
Buat fungsi yang akan menerima panjang dan lebar, yang membuat jajar genjang seperti di bawah ini
- - - - -
\         \
  \         \
    \         \ 
      \         \
        - - - - -
*/

        function angka($lebar,$tinggi){
        	for ($a=1; $a <= $lebar; $a++) { 
        		echo "-";
        	}echo "<br>";
        	for ($i=0; $i < $tinggi + 2; $i++) { 
        		echo"&nbsp;&nbsp;\&nbsp;&nbsp;\<br>";
        	}
        	for ($a=1; $a <= $lebar; $a++) { 
        		echo "-";
        	}
        }
        angka(4,6);

        ?>

