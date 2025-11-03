<?php

declare(strict_types=1);

class A
{
    public int $numb {
        get => 1;
    }
}

$a1 = new A;

$a1->numb = 2; // error  Property A::$numb is read-only
