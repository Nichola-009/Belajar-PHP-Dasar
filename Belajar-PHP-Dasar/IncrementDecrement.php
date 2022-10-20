<?php

//increment = menaikan satu angka
//decrement = menurunkan satu angka

$a = 10;

//pre increment = dinaikan dulu baru di simpan
//post increment = disimpan dulu baru dinaikan
$b = ++$a;
var_dump($b);
var_dump($a);

$b = $a++;
var_dump($b);
var_dump($a);

//decrement

$b = --$a;
var_dump($b);
var_dump($a);
$b = $a--;
var_dump($b);
var_dump($a);