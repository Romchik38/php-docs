<?php

declare(strict_types=1);

class A {
    public int $numb = 1;
}

const B = new A;

var_dump(B->numb);