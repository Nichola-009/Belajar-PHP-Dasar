<?php

// + union 
// == Equality
// === identity
// != inequality
// <> inequality
//!== nonidentity

$first = array(
    "firstname" => "Nichola",
    "lastname" => "Saputra"

);

$last = array(
    "lastname" => "Saputra",
    "firstname" => "Nichola"
);
//union +
var_dump($first + $last);

//equality ==
var_dump($first == $last);
var_dump($last === $first);
var_dump($first != $last);
var_dump($first !== $last);



