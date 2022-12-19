<?php

//ADVANCED

function getShoppingCart(): array
{
    return [
        'products' => [
            'Comfy chair' => 'no data',
            'Yellow lamp' => [
                'price' => 15.3,
                'quantity' => 2,
            ],
            'Didzioji sofa' => [
                'pavadinimas' => 'Didzioji sofa',
                'kaina' => 'trylika eurų'
            ],
            'Softest rug' => [
                'price' => 27.3,
                'quantity' => 3,
                'discount' => 13,
            ],
            'Blue shelf' => [],
        ],
        'cartDiscounts' => [5, 16, 15],
    ];
}

//1 task
function exercise1(): void
{
    $shoppingCart = getShoppingCart();

    $productNames = array_keys($shoppingCart['products']);

    $productList = implode(', ', $productNames);

    echo $productList;
}

var_dump(exercise1());
echo PHP_EOL;

//2 task
function exercise2(): float
{
    $totalPrice = 0;
    $shoppingCart = getShoppingCart();

    foreach ($shoppingCart['products'] as $product) {
        if (isset($product['price']) && isset($product['quantity'])) {
            $totalPrice += $product['price'] * $product['quantity'];
        }
    }

    return $totalPrice;
}

var_dump(exercise2());
echo PHP_EOL;

//3 task
function exercise3(): float
{
    $totalPrice = 0;
    $shoppingCart = getShoppingCart();

    foreach ($shoppingCart['products'] as $product) {
        if (isset($product['price']) && isset($product['quantity'])) {
            $discount = isset($product['discount']) ? $product['discount'] : 0;
            $totalPrice += ($product['price'] * (1 - $discount / 100)) * $product['quantity'];
        }
    }

    $cartDiscount = max($shoppingCart['cartDiscounts']);
    $totalPrice *= (1 - $cartDiscount / 100);

    return $totalPrice;
}

var_dump(exercise3());
echo PHP_EOL;

//4 task
function exercise4(array $newIpList): array
{
    $existingIpList = [
        '1.17.2.1',
        '15.1.2.1',
        '1.9.2.1',
        '1.1.98.1',
        '1.1.2.12',
        '1.11.2.1',
        '122.1.2.1',
        '1.31.2.1',
        '33.12.2.1',
    ];

    $result = [
        'ipsNew' => [],
        'ipsOld' => [],
        'ipsRemaining' => [],
    ];

    foreach ($newIpList as $newIp) {
        if (!in_array($newIp, $existingIpList)) {
            $result['ipsNew'][] = $newIp;
        } else {
            $result['ipsRemaining'][] = $newIp;
        }
    }
    foreach ($existingIpList as $existingIp) {
        if (!in_array($existingIp, $newIpList)) {
            $result['ipsOld'][] = $existingIp;
        }
    }

    return $result;
}

    $result = exercise4(
        ['15.1.2.1', '16.1.8.1', '15.1.8.1']);
    print_r($result);
    echo PHP_EOL;

//5 task
function exercise5(): string
{
    $words = [
        'over',
        'jumps',
        'fox',
        'Quick',
        'dog',
        'lazy',
        'very',
        'the',
    ];

    $half = count($words) / 2;
    $firstHalf = array_slice($words, 0, $half);
    $secondHalf = array_slice($words, $half);

    $firstHalf = array_reverse($firstHalf);
    $secondHalf = array_reverse($secondHalf);

    $result = array_merge($firstHalf, $secondHalf);

    return join(' ', $result);
}

var_dump(exercise5());
echo PHP_EOL;

//6 task
function array_map_custom(callable $callback, array $array): array
{
    $result = [];
    foreach ($array as $item) {
        $result[] = $callback($item);
    }
    return $result;
}

$array = [1, 2, 3, 4, 5];
$result = array_map_custom(function($x) { return $x * $x; }, $array);

print_r($result);

//7 task
function array_filter_custom(array $array, ?callable $callback): array
{
    $filteredArray = [];
    foreach ($array as $key => $value) {
        if (!isset($callback) || $callback($value, $key)) {
            $filteredArray[$key] = $value;
        }
    }
    return $filteredArray;
}

$array = [1, 2, 3, 4, 5];

$filteredArray = array_filter_custom($array, function($value) {
    return $value % 2 === 0;
});

print_r($filteredArray);

//8 task
function array_reduce_custom(array $array, callable $callback, $carry)
{
    foreach ($array as $key => $value) {
        $carry = $callback($carry, $value, $key);
    }
    return $carry;
}

$array = [1, 2, 3, 4];

$reduced = array_reduce_custom($array, function($carry, $value) {
    return $carry + $value;
}, 0);

echo $reduced;
echo PHP_EOL;
