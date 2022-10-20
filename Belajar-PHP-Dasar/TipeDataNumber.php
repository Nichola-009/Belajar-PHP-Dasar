<?php

echo "desimal : ";
var_dump(1234);
echo "octal : ";
var_dump(01234);
echo "hexadesimal : ";
var_dump(0x1B);
echo "Binary : ";
var_dump(0b1111100011);
echo "Underscore di Number : ";
var_dump(123_456_789);


//Float
echo "Floating Point : " ;
var_dump(123.2334);
echo "Floating Point dengan E notation : ";
var_dump(1.7e2); // = 1 * 100
echo "Floating Point Dengan -E notation : ";
var_dump(1.7e-3); // = 1 * 0.001
echo "Underscore di floating point";
var_dump(12.213_23434);

//Integer Overflow
//Maksudnya adalah melebihi kapasitas
//jika melebihi batas maka akan di konversi menjadi floating point
echo "Overflow";
var_dump(9999999999999999999999999999);
