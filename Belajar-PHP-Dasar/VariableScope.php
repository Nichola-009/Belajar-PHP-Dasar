<?php

//====Variable Scope=====

//Global Scope Hanya Bisa Diakses Diluar Function

$name = "Nichola";

function sayName () 
{
    // echo $name; // Eror
    //Local Scope Hanya Bisa Di Akses Di Dalam Function Dia Sendiri
    $local = " Saputra";
    echo $local. PHP_EOL;
}

nameGlobal();
sayName();

//Global Keyword
function nameGlobal () 
{
    global $name; // Tidak Eror 
    //Local Scope Hanya Bisa Di Akses Di Dalam Function Dia Sendiri
    echo $name;
}


//$GLOBAL VARIABLE = Variabel Global Scope Di Simpan Di Array Globals
// var_dump($GLOBALS);
echo $GLOBALS["name"]. PHP_EOL;

//Static Scope
function increment ()
{
    static $nilai = 1;
    echo "NILAI - $nilai".PHP_EOL;
    $nilai++;
}

increment();
increment();
increment();
increment();
increment();

