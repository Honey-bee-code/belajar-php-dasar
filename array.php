<?php
echo '<h4>Array Terindeks</h4>';
$listMahasiswa = [
    "Nurul Huda",
    "Wahid Abdullah",
    "Reza Ilhami"
];
echo $listMahasiswa[2] . "<br>";
echo "<br>";

foreach ($listMahasiswa as $mahasiswa) {
    echo $mahasiswa . "<br>";
}
echo "<br>";

foreach ($listMahasiswa as $key => $mahasiswa) {
    echo "{$key} {$mahasiswa} <br>";
}

echo '<h4>Array Asosiatif</h4>';
$mahasiswa = [
    'nama' => 'Nurul Huda',
    'domisili' => 'Surabaya',
    'jenis_kelamin' => 'Laki-laki'
];

echo "Nama : {$mahasiswa['nama']}<br>";
echo "Domisili : {$mahasiswa['domisili']}<br>";
echo  "Jenis Kelamin : {$mahasiswa['jenis_kelamin']}<br>";

echo '<h4>Array Multidimensi</h4>';

$histogram = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 2],
    [3, 5, 1, 0, 5],
    [5, 8, 1, 3, 1]
];

echo $histogram[2][3];
echo "<br>";
echo "<br>";

$arrayMultidimensi = [
    "Nurul Huda",
    "Lendis Fabri",
    [1,2,3,4,5],
    [3.4, 10.93],
    true,
    false,
];

echo $arrayMultidimensi[3][0];
echo "<br>";
echo "<br>";

$menu = [
    ["nama" => "Beranda"],
    ["nama" => "Berita", 
        "subMenu" => [
                     ["nama" => "Olahraga",
                        "subMenu" => [
                                     ["nama" => "Bola"],
                                     ["nama" => "Bulu Tangkis"]
                                     ]
                     ],
                     ["nama" => "Politik"],
                     ["nama" => "Manca Negara"]
                     ]
    ],
    ["nama" => "Tentang"],
    ["nama" => "Kontak"]
];

echo $menu[1]['subMenu'][0]['subMenu'][1]['nama'] . "<br>";

function tampilkanMenu (array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
    } echo "</ul>";
}

tampilkanMenu($menu);

function tampilkanMenu2 (array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
        if ($item['subMenu'] && count($item['subMenu'])) {
            tampilkanMenu2($item['subMenu']);
        }
    } echo "</ul>";
}

tampilkanMenu2($menu);

echo '<h4>Menambahkan dan mengurangi Item ke Dalam Array</h4>';

$buah = ['Apel', 'Jeruk'];

array_push($buah, 'Nanas','Semangka', 'Melon');
$buah[] = 'Anggur';
$buah[] = 'Jambu' ;
#menghapus item terakhir
#array_pop($buah);
#array_pop($buah);
#menghapus item pertama
#array_shift($buah);
#array_shift($buah);

foreach($buah as $key => $item) {
    echo "$key. " . $item . "<br>";
}

echo '<h4>Fungsi Explode</h4>';

$mahasiswa = "Andi, Budi, Deni, Edwin, Fajar, Hendra";
$absen = explode(", ", $mahasiswa);
var_dump(explode(", ", $mahasiswa));
echo "<br>";
echo "<br>";

echo $absen[1];
echo "<br>";
echo "<br>";

foreach($absen as $key => $item) {
    echo "$key. " . $item . "<br>";
}

echo '<h4>Filter Array (arrray_filter)</h4>';

$nilaiSiswa = [
    ['nama' => 'Andi', 'nilai' => 80],
    ['nama' => 'Budi', 'nilai' => 40],
    ['nama' => 'Candra', 'nilai' => 20],
    ['nama' => 'Denis', 'nilai' => 70],
    ['nama' => 'Febrian', 'nilai' => 100],
    ['nama' => 'Gunawan', 'nilai' => 90],
    ['nama' => 'Hendra', 'nilai' => 35],
    ['nama' => 'Yusron', 'nilai' => 75]
];

# nilai yang kurang dari atau sama dengan 50
$nilai50Kebawah = array_filter($nilaiSiswa, function($item) {
    return $item['nilai'] <= 50;
});

# nilai yang lebih dari 80
$nilaiLebih80 = array_filter($nilaiSiswa, function($item) {
    return $item['nilai'] >= 80;
});

echo "<p>Nilai Siswa</p>";
foreach($nilaiSiswa as $item) {
    echo $item['nama'] . ", nilai : " . $item['nilai'] . "<br>";
}
echo "<p style='color: red'>Siswa yang bodoh :</p>";
foreach($nilai50Kebawah as $item) {
    echo $item['nama'] . ", nilai: " . $item['nilai'] . "<br>";
}
echo "<br>";
echo "<p style='color: green'>Siswa yang pintar :</p>";
foreach($nilaiLebih80 as $item) {
    echo $item['nama'] . ", nilai: " . $item['nilai'] . "<br>";
}

echo "<h4>Pemetaan Array (arrray_map)</h4>";

$angka = [4,3,1,5,6];

$ratusan = array_map(function($item) {
    return $item * 100 ;
},$angka);


echo "<br>";
foreach ($ratusan as $item) {
    echo $item . "<br>";
}