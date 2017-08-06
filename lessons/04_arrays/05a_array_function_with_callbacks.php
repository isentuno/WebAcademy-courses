<?php

$ages = ['Peter' => 41, 'Glen' => 18, 'Bob' => 23, 'Robin' => 15];

$newAges = array_filter ($ages, function ($age) {
    return $age >= 18;
});

print_r ($newAges);

$stocks = [
    'Kyiv' =>[
        'Apples'    =>12,
        'Oranges'   =>26,
    ],
    'Lviv' =>[
        'Apples'    =>14,
        'Oranges'   =>13,
    ],
    'Odessa' =>[
        'Apples'    =>5,
        'Oranges'   =>1,
    ],
];

echo array_reduce ($stocks, function($carry, $item) {
    return $carry = $item['Apples'];

}, 0);


$prices = [
'name'      => 'MacBook Pro',
'price'     => '2500',
'currency'  => '$'
    ],
$prices = [
'name'      => 'Macbook Air',
'price'     => '1700',
'currency'  => '$'
    ],
$prices = [
'name'      => 'Apple Iphone 7',
'price'     => '1000',
'currency'  => '$'
    ],
$prices = [
'name'      => 'Apple Ipad',
'price'     => '1200',
'currency'  => '$'
    ];

$newPrices = array_map(function($item) {
    return array_merge($item, ['price' => number_format($item['price'], 2, ',', '.'),];

}, $prices);

    print_r($NewPrices);



















