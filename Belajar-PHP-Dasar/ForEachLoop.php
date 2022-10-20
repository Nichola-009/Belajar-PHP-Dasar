<?php

//Dapat Digunakan Untuk Mengakses Array Secara Otomatis
error_reporting(0);
$names = array("Nichola", "Saputra", "Faradita");

for ($data = 0; $data < count($names); $data++) {
    echo "Data Ke $data = $names[$data]". PHP_EOL;
}

foreach($names as $sapi) {
    echo "Data Ke $sapi". PHP_EOL;
}

$orang = array(
    "Nama" => "Nichola",
    "Umur" => "18",
    "Kelas" => "IKONE",
    "Alamat" => [
     "Kota" => "Blitar",
     "Desa" => "Plandirejo",
    ]
);

foreach ($orang as $dataku => $key ) {
    echo "Data = $dataku.$key" . PHP_EOL;
    foreach($key as $data1 => $values) {
        echo "Data = $data1.$values" . PHP_EOL;
    }
}
?>
