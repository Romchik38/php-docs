<?php

declare(strict_types=1);

function closure(int $numb): callable
{
    return function(int $numb2) use ($numb): int
    {
        return $numb + $numb2;
    };
}

$c1 = closure(1);
var_dump($c1(1)); // 2
