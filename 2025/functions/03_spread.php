<?php

declare(strict_types=1);

$numbers = [1, 2, '3', 4];

function sum(int ...$params)
{
    $sum = 0;
    foreach($params as $param) {
        $sum+= $param;
    }
    return $sum;
}

var_dump(
    sum(...$numbers)  // Error Argument #3 must be of type int, string given
);
