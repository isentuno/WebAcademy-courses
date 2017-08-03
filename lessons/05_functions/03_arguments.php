<?php

if (php_sapi_name() === 'cli') {
    define('LS', "\n");
} else {
    define('LS', '<br>');
}

// ===========================================================

function sayHello($name, $surname = 'Brown') {
    echo "Hello $name $surname!", LS;
}

// sayHello();                     // PHP Fatal Error
sayHello("Jani", "Smith");      // call the function
sayHello("Hege", "Otwell");
sayHello("Stale");
sayHello("Kai Jim");
sayHello("Borge", "Ala Rab");

echo LS;

// ============================================================

$variable = 5;

function showScope() {
    if (isset($variable)) {
        echo 'Variable $variable has been already declared', LS;
    } else {
        echo 'Variable $variable has not been previously declared', LS;
    }

    $variable = 10;
    echo $variable, LS;
}

echo $variable, LS;
showScope();
echo $variable, LS;

echo LS;

// ============================================================

$GLOBALS['variable'] = 5;
$variable = 5;

function showScopeWithGlobals() {
    if (isset($variable)) {
        echo 'Variable $variable has been already declared', LS;
    } elseif (isset($GLOBALS['variable'])) {
        echo 'Variable $GLOBALS[\'variable\'] has been already declared', LS;
    } else {
        echo 'Variable $variable has not been previously declared', LS;
    }

    global $variable;
    $variable = 10;
    echo $variable, LS;
}

echo $variable, LS;
showScopeWithGlobals();
echo $variable, LS;

echo LS;

// ============================================================

function extendString(&$string) {
    $string .= 'and something extra.';
}

$str = 'This is a string, ';
extendString($str);
echo $str, LS;              // outputs 'This is a string, and something extra.'
