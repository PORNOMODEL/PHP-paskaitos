<?php

//1 task
function exercise1(): int
{
    $numbers = [1, 15, 25, 13, 45, 551, 2];

    $sum = array_sum($numbers);

    $result = pow($sum, 2);

    return $result;
}
var_dump(exercise1());
echo PHP_EOL;

//2 task
function exercise2(): array
{
    $numbers = [1, 15, 25, 13, 45, 551, 2];

    $result = array_map(function($number) {
        return $number * 15;
    }, $numbers);

    return $result;

}
print_r(exercise2());
echo PHP_EOL;

//3 task
function exercise3(string $orderDirection): array
{
    $numbers = [-5, 15, -3, 1, 0, -2, 3];

    $filtered = array_filter($numbers, function($number) {
        return $number >= 0;
    });

    if ($orderDirection === 'ascending') {
        sort($filtered);
    } else {
        rsort($filtered);
    }

    return $filtered;
}
print_r(exercise3('ascending'));
print_r(exercise3('descending'));
echo PHP_EOL;

//4 task
function exercise4(int $number): int
{
    $numbers = [1, 15, 25, 13, 45, 551, 2];

    $sum = 0;
    foreach ($numbers as $n) {
        $sum += $n + $number;
    }

    return $sum;
}
$result = exercise4(9);
echo $result;
echo PHP_EOL;
echo PHP_EOL;

//5 task
function exercise5(int $number): void
{
    if ($number > 0) {
        for ($i = $number; $i >= 0; $i -= 2) {
            echo $i . "\n";
        }
    } else {
        for ($i = $number; $i <= 0; $i +=2) {
            echo $i . "\n";
        }
    }
}
exercise5(5);
echo PHP_EOL;
exercise5(-5);
echo PHP_EOL;

//6 task
function exercise6(array $numbers): array
{
    $statistics = [
        'suma' => 0,
        'sandauga' => 1,
        'vidurkis' => 0,
        'maksimumas' => PHP_INT_MIN,
        'minimumas' => PHP_INT_MAX,
        'skirtumas_max_min' => 0
    ];

    $count = 0;

    foreach ($numbers as $number) {
        if ($number > 0) {
            $statistics['suma'] += $number;
            $statistics['sandauga'] *= $number;
            $statistics['maksimumas'] = max($statistics['maksimumas'], $number);
            $statistics['minimumas'] = min($statistics['minimumas'], $number);
            $count++;
        }
    }

    if ($count > 0) {
        $statistics['vidurkis'] = $statistics['suma'] / $count;
    }

    if ($statistics['maksimumas'] > PHP_INT_MIN && $statistics['minimumas'] < PHP_INT_MAX) {
        $statistics['skirtumas_max_min'] = $statistics['maksimumas'] - $statistics['minimumas'];
    }

    return $statistics;
}
$result = exercise6([1, 3, 40]);
print_r($result);
echo PHP_EOL;

//7 task
function exercise7(int $height, int $width): void
{
    for ($i = 0; $i < $height; $i++) {
        for ($j = 0; $j < $width; $j++) {
            echo "[]";
        }
        echo "\n";
    }
}
exercise7(3, 4);
echo PHP_EOL;

//8 task
function exercise8(array $items, int $partsCount = 2): array
{
    $result = [];
    $partSize = ceil(count($items) / $partsCount);

    for ($i = 0; $i < $partsCount; $i++) {
        $result[] = array_slice($items, $i * $partSize, $partSize);
    }

    return $result;
}
$items = [1, 2, 3, 4, 5, 6, 7];
$parts = exercise8($items, 4);
print_r($parts);

$parts = exercise8($items);
print_r($parts);



