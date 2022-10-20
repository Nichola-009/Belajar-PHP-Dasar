<?php


goto a;
echo "Hello A". PHP_EOL;


a: 
echo "Hello World". PHP_EOL;

$counter = 0;

if ($counter > 10){
    goto end;
}

end:
echo "Goto Operator";