<?php

if (php_sapi_name() === 'cli') {
    define('LS', "\n");
} else {
    define('LS', '<br>');
}
// ========================================================================

// The "i" after the pattern delimiter indicates a case-insensitive search
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
<<<<<<< HEAD
    echo "A match was found 1.", LS;
=======
    echo "A match was found1.", LS;
>>>>>>> fca68adfdcb1194a9427b3a4238d7407fc9652c1
} else {
    echo "A match was not found.", LS;
}

/* The \b in the pattern indicates a word boundary, so only the distinct
 * word "web" is matched, and not a word partial like "webbing" or "cobweb" */
if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
<<<<<<< HEAD
    echo "A match was found 2.", LS;
=======
    echo "A match was found2.", LS;
>>>>>>> fca68adfdcb1194a9427b3a4238d7407fc9652c1
} else {
    echo "A match was not found.", LS;
}

// get host name from URL
<<<<<<< HEAD
preg_match('@^(?:http://)?([^/]+)@i', "http://www.php.net/index.html", $matches);
=======
preg_match('@^(?:https?://)?([^/]+)@i', "https://www.php.net/index.html", $matches);
>>>>>>> fca68adfdcb1194a9427b3a4238d7407fc9652c1

// echo "<pre>";
// print_r($matches);
// echo "</pre>";

$host = $matches[1];


// get last two segments of host name
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "domain name is: {$matches[0]}", LS;

// ==============================================================================

<<<<<<< HEAD
$string = 'The quick brown fox jumps over the lazy dog.';

$patterns = [
    '/quick/',
=======
$string = 'The quick brown fox jumps over the lazy dog. QUICK';

$patterns = [
    '/quick/i',
>>>>>>> fca68adfdcb1194a9427b3a4238d7407fc9652c1
    '/brown/',
    '/fox/',
];

$replacements = [
    'slow',
    'black',
    'bear',
];

echo preg_replace($patterns, $replacements, $string), LS;

// =============================================================================

$str = 'hypertext language programming';
$chars = preg_split('/ /', $str, -1, PREG_SPLIT_OFFSET_CAPTURE);

<<<<<<< HEAD
// echo "<pre>";
=======
echo "<pre>";
>>>>>>> fca68adfdcb1194a9427b3a4238d7407fc9652c1
print_r($chars);

