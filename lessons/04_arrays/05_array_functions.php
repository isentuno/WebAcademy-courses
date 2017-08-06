<?php

echo '<pre>';

// // Unshift
$array = array("a" => "red", "b" => "green");
// $array['c'] = 'yellow';
array_unshift($array, "blue");
print_r($array);

echo '============================<br>';

// Shift
$array = array("a" => "red", "b" => "green", "c" => "blue");
echo array_shift($array);
print_r($array);

echo '============================<br>';

// Push
$array = array("red", "green");
array_push($array, "blue", "yellow");
print_r($array);

echo '============================<br>';

// Pop
$array = array("red", "green", "blue");
$last = array_pop($array);
print_r($array);
echo $last;

echo '============================<br>';
echo '============================<br>';
echo '============================<br>';

// Array merge
$array1 = array("red", "green");
$array2 = array("blue", "yellow");
print_r(array_merge($array1, $array2));

$params = ['Search' => 'Andrew'];
$default = ['Limit' => 10];

echo '<br><br>';
print_r(array_merge($params, $default));


$params = ['Search' => 'Andrew', 'Limit' => 20];
$params += [
    'Limit' => 10
];

echo '<br>----------------------<br>';
print_r($params);


echo '============================<br>';

// Count
$cars = array("Volvo", "BMW", "Toyota", [1, 3, 5]);
echo count($cars); // 3

echo '============================<br>';

// In array
$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people)) {
    echo "Match found";
} else {
    echo "Match not found";
}

echo '============================<br>';

// List
$myArray = array("Dog", "Cat", "Horse");
list($a, $b, $c) = $myArray;

// $a = $myArray[0];
// $b = $myArray[1];
// $c = $myArray[2];
echo "I have several animals, a $a, a $b and a $c.";

// echo '============================<br>';

// Compact
$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

// $result = [
//     'firstname' => $firstname,
//     'lastname'  => $lastname,
//     'age'       => $age,
// ];

$result = compact("firstname", "lastname", "age");
print_r($result);

echo '============================<br>';

// Check key exists
$array = array("Volvo" => "XC90", "BMW" => "X5");
if (array_key_exists("BMW", $array)) {
    echo "Key exists!";
} else {
    echo "Key does not exist!";
}


//unque values in array

$array = [1,1,1,2,3,1,2,3,];


print_r(array_unique($array));











