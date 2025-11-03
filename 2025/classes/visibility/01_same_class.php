<?php

declare(strict_types=1);

class A
{
    public function __construct(
        private int $numb
    ) {   
    }

    public function setNumb(A $obj, int $numb): void
    {
        $obj->numb = $numb;
    }
}

$a1 = new A(1);
$a2 = new A(2);

$a1->setNumb($a2, 3);

var_dump($a2);