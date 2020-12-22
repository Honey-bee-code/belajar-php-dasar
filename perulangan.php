<?php
echo '<h4>Perulangan for</h4>';

for ($i = 10; $i > 0 ; $i--) {
    echo "{$i}. Saya akan tetap belajar <br>";
}

for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo '<h4>Menampilkan Array</h4>';

$listMahasiswa = ['Nurul Huda', 'Wahid Abdullah', 'Elmo Bachtiar'];

for ($i = 0; $i < count($listMahasiswa); $i++) {
    echo "Nama: {$listMahasiswa[$i]} <br>";
}

echo '<h4>Perintah Break dan Continue</h4>';

for ($i = 1; $i <=50; $i++) {
    if ($i % 3 === 0) {
        continue; # skip perulangan jika nilai i habis dibagi 10
    }
    echo "Perulangan ke-{$i} <br>";

    if ($i > 10) {
        break; # hentikan perulangan jika nilai i lebih dari 20
    }
} 

echo '<h4>Perulangan While</h4>';

$a = 1;

#perulangan ini akan dilakukan selama nilai a kurang dari 20
while ($a < 5) {
    echo "Perulangan ke-{$a} <br>";

    $a++;
}

echo '<h4>Perulangan tanpa batas yang jelas</h4>';

# kita mulai dari angka 1
$a = 1;

# perulangan akan dilakukan selama variabel a bukan kelipatan 3
while ($a % 3 !== 0) {
    echo "Nilai a = {$a} <br>";

    # ubah nila a secara random dari angka 1 - 100
    $a = rand(1, 100);
}

echo '<h4>Perulangan do while</h4>';

while (false) {
    echo "Perulangan ke-1 dengan while ! <br>";
} do {
    echo "Perulangan ke-1 dengan do while ! <br>";
} while (false);

echo '<h4>Perulangan Foreach</h4>';

$listMahasiswa = ['Nurul Huda', 'Wahid Abdullah', 'Elmo Bachtiar'];

foreach ($listMahasiswa as $mahasiswa) {
    echo "nama : {$mahasiswa} <br>";
}

foreach ($listMahasiswa as $key => $mahasiswa) {
    echo "[{$key}] Nama : {$mahasiswa} <br>";
}

