<?php

//1 task
function dividesBy5(int $valueA): int
{
    return $valueA % 5;
}

var_dump(dividesBy5(777));

//2 task

$arr = ['some text', 'another text'];

function arrayPrinter(array $list): void {
    foreach ($list as $item) {
        echo "'" . $item . "'";
        echo PHP_EOL;
    }
}

arrayPrinter($arr);

