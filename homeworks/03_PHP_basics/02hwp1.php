<?php


// ===========================Задание 1==============================
echo("<br><hr><br>");
echo("ЗАДАНИЕ 1");
echo("<br><hr><br>");
$firstName  = 'Herman';
$secondName = 'Onischenko';
$City       = 'Kyiv';

echo "$firstName $secondName lives in $City.<br>";
echo("<br><hr><br>");
echo("ЗАДАНИЕ 2");
echo("<br><hr><br>");

// ==================================================================

// ===========================Задание 2==============================
// Задание 2
// Сделайте преобразование типов следующих переменных:

$integer = 5;               // to "float", "boolean", "object"
$float = 22.3;              // to "integer", "boolean", "array"
$string = 'PHP is great';   // to "integer", "float", "boolean", "array"
$boolean = false;           // to "string", "integer", "array", "object"
$array = [];                // to "object", "integer", "boolean"
$object = new stdClass();   // to "array", "string"
$null = null;               // to "integer", "string", "array"
$resource = fopen('https://www.google.com.ua/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png', 'r');    // to "object", "boolean"

// Напишите Ваши преобразования ниже, и выведите результат с помощью echo, print, print_r, var_dump
// Бонусное задание: Выведите также тип переменной после пребразования


echo ("INTEGER" . '<br>');
$integer = (float)  5;
        echo gettype ($integer) . '<br>';
        print        ($integer) . '<br>';
        print_r      ($integer) . '<br>';
        var_dump     ($integer) . '<br>';
$integer = (bool)   5;
        echo gettype ($integer) . '<br>';
        print        ($integer) . '<br>';
        print_r      ($integer) . '<br>';
        var_dump     ($integer) . '<br>';
$integer = (object) 5;
        echo gettype ($integer) . '<br>';
        //print        ($integer) . '<br>'; doesn't work on std objects
        print_r      ($integer) . '<br>';
        var_dump     ($integer) . '<br>';
echo("<br><hr><br>");

echo ("FLOAT" . '<br>');
$float = (int)  22.3;
echo gettype ($float) . '<br>';
        print        ($float) . '<br>';
        print_r      ($float) . '<br>';
        var_dump     ($float) . '<br>';

$float = (bool)   22.3;
echo gettype ($float) . '<br>';
        print        ($float) . '<br>';
        print_r      ($float) . '<br>';
        var_dump     ($float) . '<br>';

$float = (array) 22.3;
        echo gettype ($float) . '<br>';
        print        ($float) . '<br>';
        print_r      ($float) . '<br>';
        var_dump     ($float) . '<br>';
echo("<br><hr><br>");

echo ("string" . '<br>');
$string = (int)  'PHP is great';
        echo gettype ($string) . '<br>';
        print        ($string) . '<br>';
        print_r      ($string) . '<br>';
        var_dump     ($string) . '<br>';
$string = (float)  'PHP is great';
        echo gettype ($string) . '<br>';
        print        ($string) . '<br>';
        print_r      ($string) . '<br>';
        var_dump     ($string) . '<br>';
$string = (bool)   'PHP is great';
        echo gettype ($string) . '<br>';
        print        ($string) . '<br>';
        print_r      ($string) . '<br>';
        var_dump     ($string) . '<br>';
$string = (array) 'PHP is great';
        echo gettype ($string) . '<br>';
        print        ($string) . '<br>';
        print_r      ($string) . '<br>';
        var_dump     ($string) . '<br>';
echo("<br><hr><br>");

echo ("BOOLEAN" . '<br>');
$boolean = (string) false;
        echo gettype ($boolean) . '<br>';
        print        ($boolean) . '<br>';
        print_r      ($boolean) . '<br>';
        var_dump     ($boolean) . '<br>';
$boolean = (int) false;
        echo gettype ($boolean) . '<br>';
        print        ($boolean) . '<br>';
        print_r      ($boolean) . '<br>';
        var_dump     ($boolean) . '<br>';
$boolean = (array) false;
        echo gettype ($boolean) . '<br>';
        print        ($boolean) . '<br>';
        print_r      ($boolean) . '<br>';
        var_dump     ($boolean) . '<br>';
$boolean = (object) false;
        echo gettype ($boolean) . '<br>';
        print_r      ($boolean) . '<br>';
        var_dump     ($boolean) . '<br>';
echo("<br><hr><br>");

echo("ARRAY" . '<br>');
$array = (object) [];
        echo gettype ($array) . '<br>';
        //print        ($integer) . '<br>';
        print_r      ($array) . '<br>';
        var_dump     ($array) . '<br>';
$array = (int) [];
        echo gettype ($array) . '<br>';
        //print        ($integer) . '<br>';
        print_r      ($array) . '<br>';
        var_dump     ($array) . '<br>';
$array = (bool) [];
        echo gettype ($array) . '<br>';
        //print        ($integer) . '<br>';
        print_r      ($array) . '<br>';
        var_dump     ($array) . '<br>';
echo ("<br><hr><br>");

echo ("OBJECT" . '<br>');
$object = (array) new stdClass();
        echo gettype ($object) . '<br>';
        //print        ($integer) . '<br>';
        print_r      ($object) . '<br>';
        var_dump     ($object) . '<br>';
//$object = (string) new stdClass();
  //      echo gettype ($object) . '<br>';
        //print        ($integer) . '<br>';
    //    print_r      ($object) . '<br>';
      //  var_dump     ($object) . '<br>';
echo("<br><hr><br>");

echo("NULL" . '<br>');
$null = (int) null;
        echo gettype ($null) . '<br>';
        //print        ($integer) . '<br>';
        print_r      ($null) . '<br>';
        var_dump     ($null) . '<br>';
$null = (string) null;
        echo gettype ($null) . '<br>';
        //print        ($integer) . '<br>';
        print_r      ($null) . '<br>';
        var_dump     ($null) . '<br>';
$null = (array) null;
        echo gettype ($null) . '<br>';
        //print        ($integer) . '<br>';
        print_r      ($null) . '<br>';
        var_dump     ($null) . '<br>';
echo ("<br><hr><br>");

echo("RESOURCE" . '<br>');
$resource = (object) fopen('https://www.google.com.ua/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png', 'r');
        echo gettype ($resource) . '<br>';
        //print        ($integer) . '<br>';
        print_r      ($resource) . '<br>';
        var_dump     ($resource) . '<br>';
$resource = (boolean) fopen('https://www.google.com.ua/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png', 'r');
        echo gettype ($resource) . '<br>';
        //print        ($integer) . '<br>';
        print_r      ($resource) . '<br>';
        var_dump     ($resource) . '<br>';
echo ("<br><hr><br>");

echo("ЗАДАНИЕ 3");
echo "<hr>";

$bar = <<<EOT
        <p style="color:red"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to mae ak type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

EOT;


echo $bar;
