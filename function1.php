<?php

function sapaPengunjung($nama = 'Pengunjung', $jumlahKunjungan=0) {
    echo "<h1>Hallo, {$nama} !</h1>";
    echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";
    if ($jumlahKunjungan > 10) {
        echo "<p>Kami memiliki hadiah ebook gratis untuk anda karena telah berkunjung sebanyak {$jumlahKunjungan} kali.</P>";
        } 
    }
sapaPengunjung();

function salamPengunjung(string $nama, int $jumlahKunjungan) {
    echo "<h1>Assalamu 'alaikum, {$nama} !</h1>";
    echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";
    if ($jumlahKunjungan > 10) {
        echo "<p>Kami memiliki hadiah ebook gratis untuk anda karena telah berkunjung sebanyak {$jumlahKunjungan} kali.</P>";
        } 
    }
salamPengunjung("Hanifi", 20);