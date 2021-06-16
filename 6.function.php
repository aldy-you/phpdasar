<?php
// pembuatan method fungsi dengan nama judul
function judul()
{
	echo "Belajar PHP Dasar";
}

// memanggil fungsi yang telah dibuat
judul();

// batas akhir comment

// pembuatan method fungsi dengan parameter
function judul($isi)
{
	echo $isi;
}


//batas akhir comment


// memanggil fungsi yang telah dibuat
judul("Belajar PHP Dasar");
// ----------------------------------------------------

// pembuatan method fungsi dengan parameter
function judul($isi)
{
	echo $isi;
}

// menerapkan string ke dalam variabel
$teks = "Belajar PHP Dasar";
// memanggil fungsi dengan variabel yang telah dibuat sebelumnya
judul($teks);


// Untuk menjalankan 3 fungsi yang berbeda silahkan dicomment salah satu fungsi 
// terlebih dahulu agar tidak terjadi error