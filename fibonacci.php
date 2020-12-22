<?php
echo "<h2>Deret Angka Fibonacci</h2>";
echo "<h4>Menggunakan array</h4>";

function fibonacci (int $jmlBilangan) {
    // array ini akan digunakan untuk menampung bilangan
    $fibonacci = [];

    for ($i = 0; $i < $jmlBilangan; $i++) {
        // penyusunan bilangan fibonacci
        if ($i < 2) {
            $bilangan = $i;
        } else {
            $bilangan = $fibonacci[$i - 1] + $fibonacci[$i -2];
        }
        array_push ($fibonacci, $bilangan);
    }
    return $fibonacci;
}

# panggil fungsi fibonacci dengan berbagi parameter

echo implode(" ", fibonacci(2)) . '<br>';
echo implode(", ", fibonacci(8)) . '<br>';
echo implode(" / ", fibonacci(9)) . '<br>';
echo implode(" - ", fibonacci(13)) . '<br>';

echo "<h4>Menggunakan variabel bantuan</h4>";

function fibonacci2 (int $jmlBilangan) {
    # string untuk menyimpan bilangan fibonacci
    $fibonacci = "";
    $satuBilanganSebelumnya = 0;
    $duaBilanganSebelumnya = 1;

    if ($jmlBilangan < 0) {
        return $fibonacci; # langsung hentikan fungsi disini
    }

    for ($i = 0; $i <$jmlBilangan; $i++) {
        if ($i < 1) {
            $bilangan = $i;
        } else {
            $bilangan = $satuBilanganSebelumnya + $duaBilanganSebelumnya;

            # update variabel untuk bilangan sebelumnya
            $duaBilanganSebelumnya = $satuBilanganSebelumnya;
            $satuBilanganSebelumnya = $bilangan;
        }
        # tambahkan bilangan ke dalam string
        $fibonacci .= "{$bilangan}, ";
    }
    return $fibonacci;
}

echo fibonacci2(2) . "<br>";
echo fibonacci2(5) . "<br>";
echo fibonacci2(8) . "<br>";
echo fibonacci2(9) . "<br>";
echo fibonacci2(10) . "<br>";
echo fibonacci2(13) . "<br>";
