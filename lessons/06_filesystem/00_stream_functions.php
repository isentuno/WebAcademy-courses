<?php

define('DS', DIRECTORY_SEPARATOR);

$fileName = '.'.DS.'examples'.DS.'input.txt';
$handle = fopen($fileName, 'r+');
echo gettype($handle);
echo '<br>';
error_log(print_r($handle, php_sapi_name() === 'cli'));

$content = '';

while (!feof($handle)) {
    $content .= fread($handle, filesize($fileName));
}

echo '<pre>';
echo $content;

fclose($handle);
