<?php

$gender = "Cowok";

if ($gender == "Cowok") {
    echo "Hai Pria" . PHP_EOL;
} else {
    echo "Hai Nona". PHP_EOL;
}

//Kita Bisa Menyingkat Seperti Ini

$hi = $gender == "Cowok" ? "Hi Pria" : "Hai Cewek";
echo $hi;