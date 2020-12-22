<?php
echo '<h4>Percabangan if</h4>';
$lulus = true;


if($lulus) {
    echo "Variabel lulus bernilai true <br>";
}

echo '<h4>Pengecualian menggunakan else</h4>';

$nilai = 70;

echo "Nilai: {$nilai} <br>";

if($nilai >=70) {
    echo "Selamat, anda lulus !";
} else {
    echo "Mohon maaf, anda tidak lulus";
}
echo "<br>";

echo '<h4>Membuat lebih dari 1 kondisi dengan elseif</h4>';

$nilai = 90;

echo "Nilai: {$nilai} <br>";

if($nilai >=85) {
    echo "Sangat mengesankan !";
} elseif ($nilai >= 70) {
        echo "Selamat, anda lulus !";
} else {
    echo "Mohon maaf, anda tidak lulus";
}
echo "<br>";

echo '<h4>Menampilkan nilai menggunakan huruf</h4>';

$nilai = 101;

echo "Nilai: {$nilai} <br>";

if ($nilai >= 85 and $nilai <= 100) {
    echo "Predikat: A";
} elseif ($nilai >= 75 and $nilai <= 84) {
    echo "Predikat: B";
} elseif ($nilai >= 60 and $nilai <= 74) {
    echo "Predikat: C";
} elseif ($nilai >= 50 and $nilai <= 59) {
    echo "Predikat: C";
} elseif ($nilai >= 0 and $nilai <= 49) {
    echo "Predikat: E";
} else {
    echo "Nilai tidak valid.";
}

echo "<br>";

echo '<h4>Percabangan Switch Case</h4>';

$url = '/';

switch ($url) {
    case '/' :
        echo 'Selamat datang di dashboard.';
        break;
    case '/about' :
        echo 'Selamat datang di halaman about.';
        break;
    case '/contact' :
        echo 'Selamat datang di halaman contact';
        break;
    default :
        echo 'Maaf halaman yang anda cari tidak ditemukan';
}

echo '<br>';

echo '<h4>Ternary</h4>';

$nilai = 80;

echo $nilai > 70 ? "Selamat, anda lulus !" : "Mohon maaf, anda harus mungulang.";
