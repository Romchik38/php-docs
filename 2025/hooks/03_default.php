<?php

declare(strict_types=1);

class A
{
    public int $numb = 1 {
        get {
            if ($this->numb === 1) {
                return 1;
            } else {
                return 2;
            }
        }
    }    
}

$a1 = new A;
var_dump($a1->numb); // 1

$a1->numb = 100;
var_dump($a1->numb); // 2