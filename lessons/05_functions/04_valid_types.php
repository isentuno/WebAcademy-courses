<?php

// declare(strict_types=1);

function showUserInfo(string $name, int $age, array $favoriteFood) {
    $randKey = array_rand($favoriteFood);
    echo "Hi $name! Today is your $age birthday and I will make for you a ", $favoriteFood[$randKey];
}

showUserInfo("Joe", "32 ages", ['Pizza', 'Burger', 'Pasta']);
showUserInfo("Joe", 32, 'Pizza');   // PHP Fatal error
