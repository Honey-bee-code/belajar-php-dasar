<?php
echo '<h4>Fungsi yang mengembalikan nilai</h4>';

$a = ['Merah', 'Kuning', 'Hijau'];
$apakahVariabelABernilaiNull = is_null($a);
$apakahVariabelABertipeArray = is_array($a);
$panjangA = count($a);

$passwordTerenkripsi = md5('123456');

var_dump($apakahVariabelABernilaiNull);
echo "<br>";
var_dump($apakahVariabelABertipeArray);
echo "<br>";
var_dump($panjangA);
echo "<br>";
var_dump($passwordTerenkripsi);
echo "<br>";

echo '<h4>Membuat Fungsi yang Mengembalikan Nilai</h4>';

function hitungVolumeBalok (float $panjang, float $lebar, float $tinggi) {
    return $panjang * $lebar * $tinggi;
}

# hasil kembalian function langsung di-echo
echo hitungVolumeBalok(5, 20, 10) . "<br>";

# hasil kembalian function disimpan dalam variabel
$volume = hitungVolumeBalok(10, 3, 7);
echo $volume . "<br>";

# hasil kembalian function dijadikan parameter untuk function yang lain
var_dump(hitungVolumeBalok(10, 2, 7));

echo '<h4>Fungsi Anonim Sebagai Parameter Fungsi lain</h4>';
/**
 * Fungsi ini untuk melakukan foreach pada setiap item pada array.
 * Lalu parameter ke-2 adalah fungsi anonim untuk menangani item array.
 * tersebut mau diapakan
 */
function tampilkanArray (array $array, callable $fungsiEchoer) {
    foreach ($array as $key => $item){
        # disini kita tidak tahu fungsi anonim ini tugasnya seperti apa
        # karena ia tergantung fungsi yang dilemparkan sebagai parameter
        $fungsiEchoer($key, $item, count($array));
    }
}

# kita bikin satu variabel array berisi kumpulan nama mahasiswa
$listMahasiswa = ['Ahmad Zaki', 'Nurul Huda', 'Wahid Abdullah', 'Lendis Fabri'];

# kita panggil fungsi tampilkanArray()
# kita passing variabel $listMahasiswa untuk parameter 1, dan
# fungsi anonim yang akan menangani setiap item dari array
# sebagai parameter 2
tampilkanArray($listMahasiswa, function($key, $nama) {
    echo "{$key} - Bung {$nama} <br>";
});

# kita panggil lagi fungsi tampilkanArray dengan
# parameter fungsi anonim yang berbeda
tampilkanArray($listMahasiswa, function($key, $nama, $panjangArray) {
    echo "{$nama}";

    if ($key < $panjangArray - 1 ) {
        echo " - ";
    }
});

echo "<br>";

echo '<h4>Fungsi Arrow</h4>';

$faktor = 10;
$himpunanAsli = [1,2,3,4,5];
$himpunanKelipatan10 = array_map(function($n) use ($faktor) {
    return $n * $faktor;
}, $himpunanAsli);

var_dump($himpunanAsli);
echo "<br>";
var_dump($himpunanKelipatan10);
