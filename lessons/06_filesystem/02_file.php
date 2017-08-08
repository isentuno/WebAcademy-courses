<?php

// Получает содержимое файла в виде массива. В данном примере мы используем
// обращение по протоколу HTTP для получения HTML-кода с удаленного сервера.
$lines = file('http://example.com/');

// Осуществим проход массива и выведем содержимое в виде HTML-кода вместе с номерами строк.
foreach ($lines as $lineNum => $line) {
    $lineNum += 1;
    echo "Line #<b>{$lineNum}</b> : " . htmlspecialchars($line) . "<br />\n";
}

// Второй пример. Получим содержание web-страницы в виде одной строки.
// См.также описание функции file_get_contents().
$html = implode('', file('https://example.com/'));

$handle = fopen('./examples/example_website', 'w');
fwrite($handle, $html);
fclose($handle);

// Используем необязательный параметр flags (начиная с PHP 5)
$trimmed = file('./examples/input.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

echo print_r($trimmed, true);
