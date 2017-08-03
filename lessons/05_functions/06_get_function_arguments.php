<?php

if (php_sapi_name() === 'cli') {
    define('LS', "\n");
} else {
    define('LS', '<br>');
}

// ===========================================================

function sumAllValues() {
    $values = func_get_args();

    return array_reduce($values, function($total, $item) {
        return $total + $item;
    }, 0);
}

echo sumAllValues(1, 2, 3, 4, 5, 6, 8), LS;

echo LS;

// ===========================================================

// Rest params
function userData($name, $age, ...$params) {
    // echo "<pre>";
    // print_r(func_get_args());
    // print_r($params);
    // echo "</pre>";

    echo "$name is $age years old";
    if (isset($params[0])) {
        echo ", work as a $params[0]";
    }
    if (isset($params[1])) {
        echo " and like to eat $params[1]";
    }
    echo LS;
}

userData("Joe", 32, "Driver", "Pizza");
userData("Perry", 36, "Doctor");
userData("Jack", 29);
