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

class B extends A
{
    public int $numb {
        get {
            $temp = parent::$numb::get();
            if ($temp === 1) {
                return 2;
            }
        }
    }
    
}

$b1 = new B;

var_dump($b1->numb);  // 2
