<?php

if (php_sapi_name() === 'cli') {
    define('LS', "\n");
} else {
    define('LS', '<br>');
}
$str = "Hello World";
// =================================================

// strlen
echo "Length of string '$str' = ", strlen($str), LS;
echo LS;

// strpos
var_dump(strpos($str, 'Hello'));

if (strpos($str, 'Hello') !== false) {
    echo "Substring found", LS;
}
echo LS;

// substr
echo substr($str, 2), LS;
echo substr($str, 0, 10), LS;

echo substr($str, 0, -2), LS;
echo substr($str, -5, -2), LS;

$quotedString = "'I am quoted string'";
echo substr($quotedString, 1, -1), LS;

echo LS;

// str_replace
echo str_replace("World", "Peter", $str), LS;
// echo str_replace("{%name%}", "Peter", $str), LS;

$colors = array("blue", "red", "green", "yellow", "red");
echo print_r(str_replace("red", "pink", $colors, $i), php_sapi_name() == 'cli');
echo "Replacements: $i", LS;

echo LS;

// explode
$longStr = "Hello world. It's a beautiful day.";
$arrayFromStr = explode(" ", $longStr);
echo print_r($arrayFromStr, php_sapi_name() == 'cli');

echo LS;

// implode
echo implode("_", $arrayFromStr), LS;

echo LS;

$spacedString ="                      A lot of space here           ";
echo ($spacedString), LS;
echo trim ($spacedString), LS;
echo trim("'I am quoted string'", "'"), LS;
echo trim($str, "Hed!"), LS;

echo LS;

// str_split
echo "<pre>";
echo print_r(str_split($str, 4), php_sapi_name() == 'cli'), LS;

echo LS;

// strcmp
echo strcmp($str, "Hello World,"), LS;           // the two strings are equal
echo strcmp($str, "Hello"), LS;                 // string1 is greater than string2
echo strcmp($str, "Hello world! Hello!"), LS;   // string1 is less than string2

echo LS;

// strrev
echo strrev($str), LS;

echo LS;

# strtolower / strtoupper
echo strtolower("Hello WORLD."), LS;
echo strtoupper("Hello WORLD!"), LS;

echo LS;

// md5
echo md5($str), LS, LS;

// number_format
echo number_format("1000000"), LS;
echo number_format("1000000", 4), LS;
echo number_format("1000000", 2, ",", "'"), LS, LS;

// printf
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.", $number, $str);

/********************************************************************************
Possible format values:
    %% - Returns a percent sign
    %b - Binary number
    %c - The character according to the ASCII value
    %d - Signed decimal number (negative, zero or positive)
    %e - Scientific notation using a lowercase (e.g. 1.2e+2)
    %E - Scientific notation using a uppercase (e.g. 1.2E+2)
    %u - Unsigned decimal number (equal to or greather than zero)
    %f - Floating-point number (local settings aware)
    %F - Floating-point number (not local settings aware)
    %g - shorter of %e and %f
    %G - shorter of %E and %f
    %o - Octal number
    %s - String
    %x - Hexadecimal number (lowercase letters)
    %X - Hexadecimal number (uppercase letters)

Additional format values. These are placed between the % and the letter (example %.2f):
    + (Forces both + and - in front of numbers. By default, only negative numbers are marked)
    ' (Specifies what to use as padding. Default is space. Must be used together with the width specifier. Example: %'x20s (this uses "x" as padding)
    - (Left-justifies the variable value)
    [0-9] (Specifies the minimum width held of to the variable value)
    .[0-9] (Specifies the number of decimal digits or maximum string length)
*******************************************************************************/
