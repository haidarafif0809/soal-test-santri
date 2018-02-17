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

function jajarGenjang($panjang, $lebar)
{

    for ($i = 1; $i <= $panjang; $i++):
        echo "<br>";
        for ($j = $i; $j <= $lebar; $j++):
            echo "&nbsp;&nbsp";
        endfor;
        for ($k = $i; $k >= 1; $k--):
            echo $k;
        endfor;
        for ($d = $i; $d >= 1; $d++):
            // echo "#";
            echo $d;
        endfor;
    endfor;
}
jajarGenjang(5, 5);
