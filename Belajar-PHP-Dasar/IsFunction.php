<?php

//is function digunakan untuk mengecek tipe data 
//kebanyakan nilainya true false

function isfunction (string $nama) : string
{
    var_dump(is_string($nama));
    var_dump(is_int($nama));
    var_dump(is_bool($nama));
    var_dump(is_callable($nama));
    var_dump(is_array($nama));
    var_dump(is_float($nama));

    return $nama;
}

var_dump(isfunction("Nichola"));