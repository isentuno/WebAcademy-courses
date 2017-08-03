<?php

if (php_sapi_name() === 'cli') {
    define('LS', "\n");
} else {
    define('LS', '<br>');
}

// ===========================================================

function writeMsg() {
    echo "Hello world!", LS;
}

writeMsg(); // call the function
writeMsg(); // call the function
writeMsg(); // call the function

// ===========================================================

function func2() {
    echo __FUNCTION__, LS;
}

func2();

// ===========================================================

$anonymousFunc = function () {
    echo date('d F y, H:i:s'), LS;
};

$anonymousFunc();
