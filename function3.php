<?php
echo '<h4>Fungsi Rekursif</h4>';

function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    # panggil diri sendiri selama indeks <= jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks +1);
    } else {
        echo "<strong style='color: red'>
        Proses berikutnya.
        </strong><br>";
    }
    echo "Perulangan ke-{$indeks} <br>";
}
tampilkanAngka(5);

echo '<h4>Fungsi Faktorial</h4>';

function faktorial ($n) {
    echo "faktorial({$n}) = faktorial(" . ($n - 1) . ") <br>";
    
    if ($n >2) {
        faktorial($n-1);
    }
}

# panggil
faktorial(4);

function faktorial2 ($n) {
    if ($n > 2) {
        return $n * faktorial2($n - 1);
    } else {
        return $n;
    }
}

# lalu panggil fungsi faktorial
$hasil = faktorial2(4);
echo $hasil;

echo '<h4>Menu Bertingkat Tak Terbatas</h4>';

$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
                    [
                    "nama" => "Olahraga",
                    "subMenu" => [
                        [
                            "nama" => "Bola"
                        ],
                        [
                            "nama" => "Bulu Tangkis"
                        ]
                                ]
                        ],
                    [
                        "nama" => "Politik"
                    ],
                    [
                        "nama" => "Manca Negara"
                    ]
                    ]
            ],        
            [
                "nama" => "Tentang"
            ],
            [
                "nama" => "Kontak"
            ],
        ];

function tampilkanMenuBertingkat (array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";

        # periksa apakah ia memiliki atribut subMenu
        # dan apakah attribut tersebut memiliki isi
        if (@$item['subMenu'] && count($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);