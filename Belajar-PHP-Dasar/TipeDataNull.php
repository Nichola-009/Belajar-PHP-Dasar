<?php

//Niali Null Adalah Variabel Tanpa Nilai
//Digunakan Untuk Mengosongkan Nilai Variable

$name = "Nichola";
echo $name;

$name = null;
echo $name;

$umur = null;
echo $umur;

$umur = 18;
echo $umur;

//Mengecek Apakah Null
echo "\n\n\n";
var_dump(is_null($name));
var_dump(is_null($umur));

//Menghapus Variable
echo "\n\n\n";
unset($umur);

//Mengecek Apakah Variable Ada
echo "\n\n\n";
var_dump(isset($umur));
var_dump(isset($name));



