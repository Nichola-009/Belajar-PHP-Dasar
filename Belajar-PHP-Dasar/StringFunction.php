<?php

//join() / implode() mengambil array menjadi string

$join = array (
    11,12,13,14,15,
);

echo join(",",$join); //yang di awal istilahnya separator
//explode memecah string menjadi array

$explode = "Nichola Saputra Faradita Marcela";

var_dump(explode(" ", $explode));

//strtoupper

echo strtoupper("nichola saputra" . PHP_EOL);

echo strtolower("NICHOLA SAPUTRA" . PHP_EOL);


//trim memotong awal dan akhir space
echo trim("     Nichola     ");

//Mesen Nggen
var_dump(substr("NICHOLA SAPUTRA", 0,6));
