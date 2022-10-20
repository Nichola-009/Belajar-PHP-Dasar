<?php 

//jika perbandinganya adalah == maka disarankan menggunakan switch stament

$a = 1;

switch($a) {
    case(10):
        echo "Anda Pantas Lulus". PHP_EOL;
        break;
    case(9) : 
    case(8) : 
        echo "Anda Lulus". PHP_EOL;
        break;
    case(7);
        echo "Anda Tidak Lulus". PHP_EOL;
    default : 
        echo "Mungkin Anda Salah Jurusan". PHP_EOL;
} 