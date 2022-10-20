<?php
error_reporting(0);
//Argument Atau Parameter

//Membuat Parameter Atau Argument

function sayHello($names) {

    echo "Halo $names". PHP_EOL;
}

sayHello("Nichola");
sayHello("Faziar");

//Default Value Argument
function sayDefault($names = "Faradita" ) {

    echo "Halo $names". PHP_EOL;
}

sayDefault();

//Contoh 2
function sayName($firstname, $lastname = "")
{
    echo "Halo $firstname $lastname". PHP_EOL;
}

sayName("Faradita", "Marcela");

//Type Declaration

function sum (int $nilai1, int $nilai2)
{
    echo $total = $nilai1 + $nilai2;
    echo "Total = $nilai1 + $nilai2 = $total". PHP_EOL;
}

sum(100,100);
sum("250", "450");
sum(true,true);

function String(string $teks1)
{
    echo var_dump($teks1). PHP_EOL;
}

String(100);
String(true);


//Variable Argument List
function Summary(...$values) 
{
    $values = array (
        1,2,3,4,5,6,7,8,9,10
    );
        $total =0;
        foreach ($values as $value){
        $total += $value;
        echo "total = ". implode(",", $values). " = $total". PHP_EOL; //implode konversi array ke string
        }
}


Summary(10,20,30,40,50,60,70);
Summary(...$values);