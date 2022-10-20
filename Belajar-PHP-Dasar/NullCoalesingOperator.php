<?php 


$data = array(
    "action" => null
);

if (isset($data["action"])) {
    $action = $data["action"];
} else {
$action = "nothing";
}

echo $action . PHP_EOL;

//Operator ?? Null Coalesing 

$databaru = $data["action"] ?? "kagaada";

echo $databaru;