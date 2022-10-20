<?php

//tipe data yang berisi kumpulan data
//untuk mengakses data dimulai dari index
//index adalah istilah penempatan data

$data = array(1,2,4,5.6,6,6,"Nichola","Saputra");
// var_dump($data);

$dataku =["Nichola","Faradita","Saputra","Marcela"];
// var_dump($dataku);

//Mengakses Array
echo $dataku[0];

//Mengubah Array
$dataku[0] = 100;
echo $dataku[0];

//Menambahkan Array;
$dataku [] = "Marcelo";
echo $dataku[4];

//Menghapus Array;
unset($dataku[3]);
var_dump(isset($dataku[0]));

//Mengambil Total Data Array
echo (count($dataku));

var_dump($dataku);

//Array Sebagai MAP

//asosiasi key dan value

$name = array(
    //key       value
    "nama" => "Nichola",
    "Kelas" => "IKONE",
    "Umur" => 18
    //Harus Unique
);

var_dump($name["nama"]);

//Array Di Dalam Array

$nested = array(
    "nama" => "Nichola",
    "Umur" => 18,
    "Jurusan" => "Informatika",
    "Alamat" => [
        "Desa" => "Plandirejo",
        "Kota" => "Blitar"
    ]
);

var_dump($nested["Alamat"]["Desa"]);





