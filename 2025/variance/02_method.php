<?php

declare(strict_types=1);

class A
{
    protected function getNumb(): int
    {
        return 1;
    }
}

class B extends A
{
    public function getNumb(): int
    {
        return 2;
    }
}

$b1 = new B;

var_dump($b1->getNumb());