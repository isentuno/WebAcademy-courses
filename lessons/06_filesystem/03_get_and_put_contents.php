<?php

$fileName = './examples/example_website';
$content = file_get_contents($fileName, false, null, 271, 650);

error_log($content);

if (!$content) {
    die('Error reading file');
}

$outputName = './examples/example_styles.css';
file_put_contents($outputName, str_replace(' ', '', $content));

echo strlen(file_get_contents($outputName));
