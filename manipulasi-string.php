<?php
echo '<h4>Menghitung String</h4>';

$mqwh = "Pondok Pesantren Salafiyah Wustha Madrasatul Qur'an Wal Hadits Al-Aziziyah";

echo "<p>{$mqwh}</p>";
echo "Jumlah karakter: " . strlen($mqwh) . "<br>";
echo "Jumlah kata: " . str_word_count($mqwh) . "<br>";

echo '<h4>Memotong String</h4>';

echo "<p>" . substr($mqwh, 0, 33) . "</p>";
echo "<p>" . substr($mqwh, 34, 28) . "</p>";
echo "<p>" . substr($mqwh, 34) . "</p>";
echo "<p>" . substr($mqwh, -11) . "</p>";

echo '<h4>Uppercase</h4>';

echo "<p>" . strtoupper($mqwh) . "</p>";

echo '<h4>Lowercase</h4>';

echo "<p>" . strtolower($mqwh) . "</p>";


echo '<h4>Membalikkan String</h4>';

$pesan = "saya sudah faham";
echo strrev($pesan) . "<br>";
# ubah variabel mqwh menjadi array
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi terbalik
$pesanPerKata = array_map(fn($pesan) => strrev($pesan),$pesanPerKata );
# gabungkan kembali array menjadi string
$pesan = implode(" ",$pesanPerKata);

echo $pesan . "<br>";

echo '<h4>Pencarian String</h4>';

echo 'Mencari kata "wustha" <br>';
echo strpos($mqwh, "Wustha") . "<br>";
echo strpos($mqwh, "wustha") . "<br>";
echo stripos($mqwh, "wustha") . "<br>";


echo '<h4>Replace String</h4>';

$judulBerita = "Ibu membeli Ubi";

echo "Judul asli: {$judulBerita} <br>";
echo "Judul baru: " . str_replace("membeli", "menjual", $judulBerita) . "<br>";
