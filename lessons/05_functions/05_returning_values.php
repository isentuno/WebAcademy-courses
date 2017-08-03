<?php

// Strict types since PHP7
// declare(strict_types=1);

if (php_sapi_name() === 'cli') {
    define('LS', "\n");
} else {
    define('LS', '<br>');
}

// =================================================

function sum(int $a, int $b): float {
    return $a + $b;
}

echo sum(2, 3), LS;

$result = sum(1, 5);
// var_dump($result);
echo $result, LS;

// var_dump(sum("String", "String"));      // Fatal Error

// =================================================

function sumWithoutFloats($a, $b): int {
    return $a + $b;
}

var_dump(sumWithoutFloats(1, 2));
var_dump(sumWithoutFloats(1, 2.5));
echo LS;

// ============================================================

function extendString() {
    return 'and something extra.';
}

$str = 'This is a string, ' . extendString();
echo $str, LS;              // outputs 'This is a string, and something extra.'
