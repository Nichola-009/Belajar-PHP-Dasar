<?php

//Menghentikan Case Dalam Switch 
//Menghentikan Lalu Ngeskip Perulanganya Dan Lanjut Ke Perulanganya Berikutnya
$counter = 1;
//Break

while(true) {
    echo "Tanpa Henti". PHP_EOL;
    $counter++;

    if ($counter >= 100) {
        echo "BERHENTI";
        break;
    }
}

for ($nilai = 1; $nilai <= 100; $nilai++) {

    if ($nilai % 2 == 1) {
        
        continue;
    }

    echo "Hitungan Ke $nilai". PHP_EOL;
}

