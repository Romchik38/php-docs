<?php

declare(strict_types=1);

class A
{
    public function __call($name, $arguments)
    {
        var_dump($name);
        var_dump($arguments);
    }
}

$a1 = new A;

$a1->hello(1);
