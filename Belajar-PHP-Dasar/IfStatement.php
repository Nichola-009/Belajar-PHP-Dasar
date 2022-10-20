<?php

//Percabangan

$nilai = 55;
$absen = 75;

if ($nilai >= 77 && $absen >=75 ) {
    echo "Selamat Anda Lulus". PHP_EOL;

} else if ($nilai >= 60 && $absen >= 75) {
    echo "nilai anda B". PHP_EOL;
    
}
    else if ($nilai >= 50 && $absen >= 75) {
    echo "nilai anda C". PHP_EOL;
    
} else {
    echo "Anda Tidak Lulus". PHP_EOL;

}
