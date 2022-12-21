<?php
declare(strict_types=1);
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
    while ($number > 0) {
        echo $number . PHP_EOL;
        $number -= 2;
    }
    echo 0 . PHP_EOL;
}
exercise5(5);



