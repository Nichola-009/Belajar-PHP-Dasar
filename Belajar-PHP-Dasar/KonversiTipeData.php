<?php

//int untuk ke int
//float untuk ke float
//string untuk ke string

$nilaiString = (string)1800080800;
var_dump($nilaiString);

$nilaiInt = (int)"89800";
var_dump($nilaiInt);

$nilaiInt = (int)"Jika Tidak Valid Data Berubah Menjadi 0";
var_dump($nilaiInt);

$nilaiFloat = (float)"2424.2424.4";
var_dump($nilaiFloat);
