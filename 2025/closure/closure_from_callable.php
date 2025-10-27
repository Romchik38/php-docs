<?php

declare(strict_types=1);

// Function
function sum(int $a, int $b): int {
    return $a + $b;
}

// Clouse
$s = fn(int $a, int $b): int => $a + $b;

// Clouse from function
$s1 = sum(...);

var_dump($s);
var_dump($s1);

// Same result
echo 'function: ' . sum(1, 2) . PHP_EOL;
echo 'Clouse: ' . $s(1, 2) . PHP_EOL;;
echo 'Clouse from callable: ' . $s1(1, 2) . PHP_EOL;