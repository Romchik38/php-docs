<?php

declare(strict_types=1);

class A
{
    public function __construct(
        public int $numb
    ) {
    }
}

class B extends A
{
    private function __construct(
        public int $numb
    ) {
    }

    public static function fromInt(int $numb): self
    {
        return new self($numb);
    }
}

$b1 = B::fromInt(1);

var_dump($b1->numb);