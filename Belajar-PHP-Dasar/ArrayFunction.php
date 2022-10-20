<?php

$data = array("SATU", "DUA", "TIGA", "EMPAT", "LIMA");


var_dump(array_map(fn($data) => $data * 2, $data));
echo "\n\n\n\n";
var_dump($data);

var_dump(rsort($data));

var_dump(sort($data));

var_dump(array_keys($data));

var_dump(array_values($data));

var_dump(shuffle($data));