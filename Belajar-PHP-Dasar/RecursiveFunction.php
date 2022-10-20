<?php

//adalah kemampuan function yang dapat memanggil dirinya sendiri

//Contoh Masalah Jika Tidak Menggunakan Recursive

function factorialLoop (int $value ): int
{

    $total = 1;
    for ($i = 1; $i <= $value; $i++)
    {
        $total = $total * $i;
    }

    return $total;

}

var_dump(factorialLoop(6));


//Memakai Recursive

function factorial ($nilai)
{
    if ($nilai == 1 ){
        return $nilai;
    } else 
    {
        return $nilai * factorial($nilai - 1);
    }
}

echo factorial(3);

//Membuat Eror Stack Overflow

function loop ($nilai) 
{
    if ($nilai == 0 ) {
        echo "Selesai" . PHP_EOL;
    } else 
    {
        echo "Melakakuan Stack - $nilai". PHP_EOL;
        loop($nilai - 1);
    }
}

loop(30000000);