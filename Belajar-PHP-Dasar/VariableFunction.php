<?php

//Cara Pemanggil Function
//Kegunaan : Bisa Bikin Sebuah Argument Yang Bisa Memasukan Function Yang lain

function foo () 
{
    echo "Nichola". PHP_EOL;
}

function boo ()
{
    echo "Saputra". PHP_EOL;
}

$functionone = "foo";
$functionone();

$functiontwo = "boo";
$functiontwo();

function sayHello($name, $filter)
{
    $finalname = $filter ($name);
    echo "Hello $finalname" . PHP_EOL;
    //Seolah Olah Membuat Function Di Argumen
}

function SampleFunction(string $name) : string
{
    return "Sample $name";
}

sayHello("Nichola","SampleFunction");