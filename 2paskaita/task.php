<?php

$variableToDebug = 15;
echo $variableToDebug;
var_dump($variableToDebug);
echo PHP_EOL;

$arr = ['Hello', 'Learning', 'Amazing', 'CodeAcademy', 'Php', 'Git'];
var_dump($arr);

echo PHP_EOL;

$variable1 = false;
$variable2 = true;
$variable3 = '2022 year';

$variable4 = 150;
$variable5 = [];
$variable6 = 'Year - 2022';

var_dump((int)$variable1);
var_dump((int)$variable2);
var_dump((int)$variable3);

var_dump((bool)$variable4);
var_dump((bool)$variable5);
var_dump((bool)$variable6);

echo PHP_EOL;

$variable7 = 145;
$variable8 = '145';
$variable9 = '150';
$variable10 = 150;

var_dump((!$variable7 && $variable8));
var_dump((!$variable9 || $variable10));

echo PHP_EOL;

$i = 143 * 444;
var_dump($i);

$i = 567 /12;
var_dump($i);

$i = 578 % 55;
var_dump($i);

$i = 6 ** 5;
var_dump($i);

$i = 5;
$i--;
var_dump($i);

$i = 6;
$i++;
var_dump($i);

echo PHP_EOL;

$i = 56 > 77;
var_dump($i);

$i = 190 <= 230;
var_dump($i);

$i = 230 == '230';
var_dump($i);

$i = 45 != '45';
var_dump($i);

echo PHP_EOL;

$variable = 10;
var_dump($variable);
var_dump(isset($variable));

echo PHP_EOL;



