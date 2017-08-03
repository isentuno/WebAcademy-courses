<?php

function funct() {
    static $a;
    $a++;
    echo "$a ";
}

for ($i = 0; $i++<10;) funct();
