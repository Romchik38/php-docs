<?php

class A {
    public function __construct(
        public Closure $callback
    ) {   
    }

    public function process(...$params): mixed
    {
        return ($this->callback)(...$params);
    }
}

$callback = strlen(...);

$a1 = new A($callback);

var_dump($a1->process('hello'));