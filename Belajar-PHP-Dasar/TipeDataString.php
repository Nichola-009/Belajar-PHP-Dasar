<?php

//Teks atau kata


//Kutip Satu
echo 'Nama : ';
echo 'Nichola Saputra';

//Kutip Dua
//Kelebihanya Bisa Menambahkan \t tab \n enter

echo "\n\t Nama : \n";
echo "\t\tFaradita Marcela Sofiana \n";

//Multiline String

    //Heredoc Sama Kaya Kutip Dua
echo <<<NIKO
    Nama : Nichola Saputra
    Kelas : IK1
    Umur : 18 Tahun
    Alamat : Plandirejo
    NIKO;
    
    //Nowdoc //Sama Kaya Kutip Satu
echo <<<'NIKO'
    Nama : Nichola Saputra
    Kelas : IK1
    Umur : 18 Tahun
    Alamat : Plandirejo
    NIKO;

