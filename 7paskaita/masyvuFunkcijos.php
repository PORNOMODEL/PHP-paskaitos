<?php

function getCities(): array
{
    return [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        [
            'name' => 'Delhi',
            'population' => 29399141,
        ],
        [
            'name' => 'Shanghai',
            'population' => 26317104,
        ],
        [
            'name' => 'Sao Paulo',
            'population' => 21846507,
        ],
        [
            'name' => 'Mexico City',
            'population' => 21671908,
        ],
        [
            'name' => 'New York',
            'population' => 25000000,
        ],
    ];
}

//1 task
function exercise1(): int
{
    $totalPopulation = 0;

    foreach (getCities() as $city) {
        $totalPopulation += $city['population'];
    }

    return $totalPopulation;
}

var_dump(exercise1());
echo PHP_EOL;

//2 task
function exercise2(): int
{
    $populations = array_column(getCities(), 'population');
    return array_sum($populations);
}

var_dump(exercise2());
echo PHP_EOL;

//3 task
function exercise3(): int
{
    $populations = getCities();
    return array_reduce($populations, function($carry, $item) {
        return $carry + $item['population'];
    }, 0);
}

var_dump(exercise3());
echo PHP_EOL;

//4 task
function exercise4(): int
{
    $totalPopulation = 0;

    foreach (getCities() as $city) {
        if ($city['population'] > 25000000) {
            $totalPopulation += $city['population'];
        }
    }

    return $totalPopulation;
}

var_dump(exercise4());
echo PHP_EOL;

//5 task
function exercise5(): array
{
    $cities = getCities();
    return array_filter($cities, function($city) {
        return $city['population'] > 25000000;
    });
}

var_dump(exercise5());
echo PHP_EOL;

//6 task
function exercise6(): int
{
    $lowPriceItems = ['t-shirt', 'shoes'];

    $orderItems = [
        [
            'name' => 't-shirt',
            'priceRegular' => 15,
            'priceLow' => 13,
            'quantity' => 3,
        ],
        [
            'name' => 'coat',
            'priceRegular' => 74,
            'priceLow' => 60,
            'quantity' => 6,
        ],
        [
            'name' => 'shirt',
            'priceRegular' => 25,
            'priceLow' => 20,
            'quantity' => 2,
        ],
        [
            'name' => 'shoes',
            'priceRegular' => 115,
            'priceLow' => 100,
            'quantity' => 1,
        ],
    ];

    $prices = array_map(function($item) use ($lowPriceItems) {
        if (in_array($item['name'], $lowPriceItems)) {
            return $item['priceLow'] + $item['quantity'];
        } else {
            return $item['priceRegular'] + $item['quantity'];
        }
    }, $orderItems);

    $total = array_sum($prices);

    return $total;
}

var_dump(exercise6());
echo PHP_EOL;
