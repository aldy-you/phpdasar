<?php
//kondisi If-Else pada PHP
// if (condition) {
//     //jika kondisi terpenuhi
// }else{
//     //jika kondisi tdk terpenuhi
// }

//contoh kondisi If-Else pada PHP
if (1 > 0) {
    echo "Benar";
} else {
    echo "Salah";
}

//contoh kondisi If-Else-If pada PHP
echo "<br>";
$cek = 3;
if ($cek == 0) {
    echo "Cetak 0";
} elseif ($cek == 1) {
    echo "Cetak 1";
} else {
    echo "Tidak ditemukan";
}
