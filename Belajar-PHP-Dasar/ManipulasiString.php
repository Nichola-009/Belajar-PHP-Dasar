<?php

// di rekomendasikan menggunakan . (dot)

$name = "Nichola Saputra";

echo "Nama : " . $name . PHP_EOL;
echo "Umur : " . 18 . PHP_EOL;

//Mengakses Karakter

echo $name[0]. PHP_EOL;
echo $name[2]. PHP_EOL;
echo $name[3]. PHP_EOL;
echo $name[4]. PHP_EOL;
echo $name[5]. PHP_EOL;
echo $name[6]. PHP_EOL;
echo $name[7]. PHP_EOL;

//Variable Parsing

//Kita Bisa Mengakses Variabel Di Dalam String

echo "Nama Saya $name, Selamat Belajar". PHP_EOL;

$nama= "Nichol";
//Curly Brace
echo "Nama Saya {$nama}a, Selamat Belajar". PHP_EOL;