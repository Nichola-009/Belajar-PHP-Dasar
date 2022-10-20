<?php

//Mengakses Value Dengan NamaVariabel Yang Berbeda
//Menggunakan Karakter &

$name = "Nichola ";

$otherName = &$name;

echo $otherName;

$otherName = "Saputra". PHP_EOL;

echo $otherName;

//Seperti Membuat Shorcut

//Pass By Reference
function increment (int &$nilai) 
{
    $nilai++;
}

for ($i = 0; $i < 10; $i++)
{
    increment($i). PHP_EOL;
}

echo "Hasil - $i". PHP_EOL;

function &getValue () 
{
    static $value = 100;
    return $value;
}

$a = getValue();
$a = 400;

$b = getValue();
echo "Ambil - $b". PHP_EOL;
