<?php
//contoh menampilkan date pada php untuk time stamp bersifat opsional
//yang berarti boleh dipake boleh tidak
// date(format, timestamp);

//contoh menampilkan tanggal
//menampilkan nama hari, tanggal, bulan, dan tahun
echo date('l, d-m-Y');
echo "<br/>";
//menampilkan tanggal, bulan, dan tahun
echo date('d / M / y');
echo "<br/>";
//menampilkan nama hari, bulan, dan tahun
echo date('D - M / Y');
echo "<br>";

//contoh menampilkan waktu
// menampilkan jam sekarang
//menampilkan waktu format 24 jam
echo date('H:i:s');
echo "<br>";
//menampilkan waktu format 12 jam
echo date('h:i:s a');
