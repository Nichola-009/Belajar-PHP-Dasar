<?php

$sayHello = function (string $nama) 
{
    echo "Hello Name $nama". PHP_EOL;
};

$sayHello("Nichola");

//Anonymous Function Sebagai Argument
function sayGoodbye (string $nama, $fuilter)
{
    $fullname = $fuilter($nama);
    echo "Halo $fullname". PHP_EOL;
}

sayGoodbye("Nichola", function (string $name){
    echo strtolower ($name). PHP_EOL;
});

//Mengakses Variable Luar

$firstname = "Faradita";
$lastname = "Marcela";

$closure = function () use ($firstname, $lastname) 
{
    echo "Helo $firstname $lastname". PHP_EOL;
};


$closure();