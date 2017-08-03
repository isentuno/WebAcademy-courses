<?php

if (php_sapi_name() === 'cli') {
    define('LS', "\n");
} else {
    define('LS', '<br>');
}
// ========================================================================

function factorial($number) {
    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorial($number-1));
    }
}

echo factorial(1), LS;      // 1            factorial(1) => 1
echo factorial(2), LS;      // 2 * 1        factorial(2) => factorial(1) => 1
echo factorial(3), LS;      // 3 * 2 * 1    factorial(3) => factorial(2) => factorial(1) => 1
echo factorial(4), LS;      // 4 * 3 * 2 * 1
echo factorial(5), LS;      // 5 * 4 * 3 * 2 * 1
