<?php


function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;

}

sayHello("Nichola", function ($name) {return strtoupper($name);});
sayHello("Nichola", fn($name) => strtoupper($name));
sayHello("Nichola", "strtoupper");
sayHello("Nichola", "strtolower");

