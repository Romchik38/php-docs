<?php

declare(strict_types=1);

function closure(int $numb): callable
{
    class A
    {
        public function __construct(
            public int $numb
        ) {   
        }

        public function sum(int $numb): int
        {
            return $numb + $this->numb;
        }
    }
    $a1 = new A(1);
    return function (int $numb) use ($a1): int 
    {
        return $a1->sum($numb) ;
    };
}

$c1 = closure(1);
var_dump($c1(1)); // 2