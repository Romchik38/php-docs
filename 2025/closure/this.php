<?php

declare(strict_types=1);

namespace Romchik38\Docs\callable;

// Clouse
$s = fn(int $a, int $b): int => $a + $b + $this->numb;

// Object as this
class A
{
    public int $numb
    {
        get => 10;
    }
}

$a1 = new A;

$result = $s->call($a1, 1, 2);
var_dump($result);
