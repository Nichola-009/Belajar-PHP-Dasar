<?php

//Contoh 1
function sum(int $nilai1 , int $nilai2 ) 
{
    $hasil = $nilai1 + $nilai2; 
    return $hasil;
}

$total = sum(10,10);
var_dump($total). PHP_EOL;

$total = sum(10000,10);
var_dump($total). PHP_EOL;

//Contoh 2
function Ujian(int $values)
{
    if ($values >= 90) 
    {
        return "A";
    } else if ($values >= 80) 
    {
        return "B";
    } else if ($values >= 70) 
    {
        return "C";
    } else if ($values >= 60) 
    {
        return "D";
    } else 
    {
        return "E";
    }

    echo "TIDAK AKAN PERNAH DI EKSEKUSI" .PHP_EOL;
}

$hasil = Ujian(90);
echo "Nilai Ujian Kamu $hasil" .PHP_EOL;

$hasil = Ujian(80);
echo "Nilai Ujian Kamu $hasil". PHP_EOL;

$hasil = Ujian(70);
echo "Nilai Ujian Kamu $hasil". PHP_EOL;

$hasil = Ujian(60);
echo "Nilai Ujian Kamu $hasil". PHP_EOL;

$hasil = Ujian(40);
echo "Nilai Ujian Kamu $hasil". PHP_EOL;

//Return Tipe Data Variabel

function GetValue(string $values) : string //Difungsikan Untuk Mempermudah Bahwa Hasil Return Nya Adalah string
{
    return $values;
}

$teks = GetValue("RETURN TIPE DATA");
echo $teks. PHP_EOL;
 