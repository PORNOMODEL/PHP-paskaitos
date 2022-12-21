<?php

//1task

function exercise1(): int
{
    $numbers = [0, 1, 2, 3, 4];
    $index = array_search(3, $numbers);
    return $numbers[$index];
}
var_dump(exercise1());
echo PHP_EOL;

//2task

function exercise2(): int
{
    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];

    if (isset($numbers['three'])) {
        return $numbers['three'];
    }

    return 0;
}
var_dump(exercise2());
echo PHP_EOL;

//3task

function exercise3(): int
{
    $numbers = [
        [0, 1],
        [1, 0, 2],
        [
            0,
            [
                0, 1, 99
            ],
        ],
    ];

    return $numbers[2][1][2];
}
var_dump(exercise3());
echo PHP_EOL;

//4task

function exercise4(): int
{
    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_2' => [
                'zero' => 0, 'one' => 1, 'ninetynine' => 99
            ],
        ],
    ];

    return $numbers['fourth']['value_2']['ninetynine'];
}
var_dump(exercise4());
echo PHP_EOL;

//5task

function exercise5(): int
{
    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_6' => [
                'zero' => 0, 'one' => 1, 99
            ],
        ],
    ];

    $values = array_values($numbers['fourth']['value_6']);
    return  $values[2];
}
var_dump(exercise5());
echo PHP_EOL;

//6task

function exercise6(): int
{

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_6' => [
                5 => 0, 'one' => 1, 99
            ],
        ],
    ];

    $values = array_values($numbers['fourth']['value_6']);
    return $values[2];

}
var_dump(exercise6());
echo PHP_EOL;

//7task

function exercise7(): array
{

    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];

    unset($numbers['two']);

    return $numbers;
}

var_dump(exercise7());
echo PHP_EOL;

//8task

function exercise8(): array
{
    $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];

    $result = [];

    foreach ($numbers as $key => $value) {
        if ($value % 2 !== 0) {
            $result[$key] = $value;
        }
    }

    return $result;
}

var_dump(exercise8());
echo PHP_EOL;

//9task

function exercise9(int $start, int $end): void
{
    if ($start < $end) {
        for ($i = $start; $i <= $end; $i++) {
            echo $i . "\n";
        }
    }
}

exercise9(1, 100);
echo PHP_EOL;

//10task

function exercise10(int $number): void
{
    if ($number < 0) {
        return;
    }

    for ($i = 3; $i <= $number; $i += 3) {
        echo $i . "\n";
    }
}

exercise10(60);
echo PHP_EOL;

//11task

function exercise11(int $number): void
{
    if ($number < 0) {
        return;
    }

    for ($i = $number; $i >= 0; $i--) {
        echo $i . "\n";
    }
}

exercise11(21);
echo PHP_EOL;


function getNumbers(): array
{
    return [
        99,
        15,
        28,
        13,
        145,
        99,
        12,
        -57,
        -36,
    ];
}

//function exercise12(): int
//{
//    $numbers = getNumbers();
//    $sum = array_sum($numbers);
//    return $sum;
//}
//
//var_dump(exercise12());
//var_dump(exercise13());
//var_dump(exercise14());
//var_dump(exercise15());
//var_dump(exercise16());
//var_dump(exercise17());


//$numbers = getNumbers();
//$sum = array_sum($numbers);
//
//echo $sum;

//function sumEvenNumbers(numbers: array): number
//{
//    return array_sum(array_filter($numbers, function($num) {
//        return $num % 2 === 0;
//    }));
//}
//
//$numbers = getNumbers();
//$sum = sumEvenNumbers($numbers);
//
//echo $sum;