<?php

declare(strict_types=1);

class A
{
    public int $numb {
        get {
            return 1;
        }
    }    
}

$a1 = new A;

var_dump($a1->numb);