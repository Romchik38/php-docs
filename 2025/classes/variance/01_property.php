<?php

declare(strict_types=1);

class A
{
    protected int $numb = 1;
}

class B extends A
{
    public int $numb = 2;
}

$b1 = new B;

var_dump($b1->numb);