<?php

declare(strict_types=1);

class A {
    public function __construct(
        public int $numb,
        public string $val,
        public B $dep
    ) {   
    }
}

class B {
    public function __construct(
        public int $param
    ) {  
    }
}

$b = new B(2);
$a1 = new A(1, '!|hello', $b);

$key = serialize($a1);

$arr = [ $key => 'some val' ];

var_dump($arr);