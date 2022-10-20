<?php

function sayHello()
{

    echo "Hello World". PHP_EOL;
}

sayHello();

//Lokasi Function

//PHP Sangat Flexible Untuk Lokasi Functionnya

$buat = true;
if ($buat) {
    sayHello(); //Jika Belum Pernah Di Panggil Maka Akan Eror
}