<?php

//Perulangan Tanpa Henti

// for (;;){
//     echo "Tanpa Henti". PHP_EOL;
// }

//Perulangan Dengan Kondisi
$counter = 1;
for (; $counter <= 10;) {
    echo "Perulangan $counter" . PHP_EOL;
    $counter++;
}
//Perulangan Dengan Post Statement
for ($i = 100; $i >= 1; $i--) {
    echo "Perulangan $i". PHP_EOL;
}