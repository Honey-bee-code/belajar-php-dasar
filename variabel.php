<?php

echo "<h1>Belajar Tipe Data PHP</h1>";

echo "<h4>Tipe Data Integer</h4>";
# inisiasi dan inisialisasi variabel
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b +(10*5);
$e = $d -$c;

echo "Variable a: {$a} <br>";
echo "Variable b: {$b} <br>";
echo "Variable c: {$c} <br>";
echo "Variable d: {$d} <br>";
echo "Variable e: {$e} <br>";

# mengetahui tipe data dari variabel

var_dump($e);

echo "<h4>Tipe Data Float</h4>";
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

# hitung nilai rata-rata
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

#tampilkan data

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

#lihat tipe data dari variabel $rataRata
var_dump($rataRata);

echo "<h4>Tipe Data Boolean</h4>";

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "<h4>Tipe Data String</h4>";
$namaDepan = "Muhammad Aulia"; #pakai tanda petik dua 
$namaBelakang = 'Hanifi'; #pakai tanda petik satu

#menggabungkan dua variabel dengan tanda petik dua
$namaLengkap = "{$namaDepan} {$namaBelakang}";

#bisa juga menggunakan titik(.)
$namaLengkap = $namaDepan .''. $namaBelakang;

#[Tampilkan Data]
#kita bisa memasukkan variabel lain jika menggunakan tanda petik dua
echo "Nama depan: {$namaDepan} <br>";
#adapun jika pakai tanda petik satu, kita tidak bisa
#kecuali menggunakan tanda titik
echo 'Nama Belakang: '. $namaBelakang . '<br>';

echo $namaLengkap;

echo "<h4>Tipe Data Array</h4>";
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];

echo $listMahasiswa[0]; // "Wahid Abdullah"
echo "<br>";
echo $listMahasiswa[1]; // "Elmo Bachtiar"