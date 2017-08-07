<?php

$ages = [
    [
        'name'  => 'Peter',
        'age'   => 41,
    ],
    [
        'name'  => 'Glenn',
        'age'   => 18,
    ],
    [
        'name'  => 'Bob',
        'age'   => 23,
    ],
    [
        'name'  => 'Robin',
        'age'   => 15,
    ],
];
$ageLimit = 18;

$newAges = array_filter($ages, function($element) use ($ageLimit) {
    return $element['age'] > $ageLimit;
});

echo "<pre>";
print_r($newAges);

echo '<br>=================================<br>';

$stocks = [
    'Kiev'      => [
        'Apple'     => 12,
        'Orange'    => 26,
    ],
    'Lviv'      => [
        'Apple'     => 14,
        'Orange'    => 13,
    ],
    'Odessa'    => [
        'Apple'     => 5,
        'Orange'    => 1,
    ],
];

echo array_reduce($stocks, function($carry, $item) {
    return $carry + $item['Apple'];
}, 0);

echo '<br>=================================<br>';

$prices = [
    [
        'name'      => 'MacBook Pro',
        'price'     => '2500',
        'currency'  => '$',
    ], [
        'name'      => 'MacBook Air',
        'price'     => '1700',
        'currency'  => '$',
    ], [
        'name'      => 'Apple iPhone 7',
        'price'     => '1000',
        'currency'  => '$',
    ], [
        'name'      => 'Apple iPad',
        'price'     => '1200',
        'currency'  => '$',
    ],
];

// $newPrices = array_map(function($item) {
//     return $item['name'] . " - " . $item['currency'] . number_format($item['price'], 2, '.', "'");
// }, $prices);

$newPrices = array_map(function($item) {
    return [
        'name'  => $item['name'],
        'price' => $item['currency'].number_format($item['price'], 2, ',', '.'),
    ];
}, $prices);

print_r($newPrices);

