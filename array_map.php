<?php
//contoh data
$data1 = [udin, solihin, paimin];
$data2 = [jakarta, surabaya, bandung];
$data3 = [20, 19, 23];

//membuat data baru dalam bentuk assosative array
$hasil = array_map(function($nama, $asal, $usia) {
    return array('nama' => $nama, 'asal' => $asal, 'usia' => $usia);
}, $data1, $data2, $data3);

echo "<pre>";
        print_r($hasil);
echo "</pre>";

echo "<br>";

$angka = [1, 2, 3, 4, 5];
$ratusan = array_map(function($item) {
    return $item * 100;
}, $angka);

foreach ($ratusan as $item) {
    echo $item . "<br>" ;
}