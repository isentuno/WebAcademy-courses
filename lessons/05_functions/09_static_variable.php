<?php

function funct() {
    static $a;
    $a++;
    echo "$a ";
}

for ($i = 0; $i++<10;) funct();



function test($a, $b, array $arr = []) {
    // return 0;

    $c = $a + $b;
    return $c;
}

echo test(1, 2);


