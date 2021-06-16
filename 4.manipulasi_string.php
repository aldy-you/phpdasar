<?php
//menghitung jumlah karakter pada teks menggunakan fungsi strlens()
$judul = "Belajar PHP Dasar";
echo "Jumlah Karakter : ", strlen($judul);
echo "<br>";

//menghitung jumlah kata pada teks menggunakan fungsi str_word_count()
$judul = "Belajar PHP Dasar";
echo "Jumlah Kata : ", str_word_count($judul);
echo "<br>";

//membalikan urutan karakter pada teks menggunakan fungsi strrev()
$judul = "Belajar PHP Dasar";
echo "Hasil Reverse : ", strrev($judul);
echo "<br>";

//memfilter kata pada teks menggunakan fungsi str_replace()
//contoh format str_replace()
//str_replace("kata yang ingin di ganti", "pengganti", "variabel");

$judul = "Belajar PHP Dasar";
echo "Hasil Replace : ", str_replace("Belajar", "Konsep", $judul);
echo "<br>";
