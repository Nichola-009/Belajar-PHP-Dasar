<?php

//Untuk Mengakses File Lainya
//Di Eksekusi Secara Berurutan Jadi Harus Betul Dan Betul

//Require = Jika File Gada Maka Eror

require "Lib/MyFunction.php";

echo sayHello("Nichola", "Saputra". PHP_EOL);
//Include = Jika File Ada Maka Eror
// include "Lib/MyFunction.php";

// echo sayHello("NINUNINU", "Warning");

require_once "Lib/MyFunction.php";

echo sayHello("Anjing", "Kamu");