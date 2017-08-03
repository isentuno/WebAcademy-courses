<?php

if (php_sapi_name() === 'cli') {
    define('LS', "\n");
} else {
    define('LS', '<br>');
}
// ========================================================================

// The "i" after the pattern delimiter indicates a case-insensitive search
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found1.", LS;
} else {
    echo "A match was not found.", LS;
}

/* The \b in the pattern indicates a word boundary, so only the distinct
 * word "web" is matched, and not a word partial like "webbing" or "cobweb" */
if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found2.", LS;
} else {
    echo "A match was not found.", LS;
}

// get host name from URL
preg_match('@^(?:http://)?([^/]+)@i', "http://www.php.net/index.html", $matches);

// echo "<pre>";
// print_r($matches);
// echo "</pre>";

$host = $matches[1];


// get last two segments of host name
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "domain name is: {$matches[0]}", LS;

// ==============================================================================

$string = 'The quick brown fox jumps over the lazy dog.';

$patterns = [
    '/quick/',
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

// echo "<pre>";
print_r($chars);

