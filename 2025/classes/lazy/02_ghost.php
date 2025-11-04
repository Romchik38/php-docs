<?php

declare(strict_types=1);

class A
{
    public function __construct(
        public int $numb
    ) {   
    }

    public function incNumb(): void
    {
        $this->numb++;
    }
}

echo 'Before create: ' . memory_get_usage(true) / 1_000_000 . PHP_EOL;

$arr = new SplFixedArray(1_000_00);

for ($i = 0; $i < 1_000_00; $i++) {
    $arr[$i] = (
        (new ReflectionClass(A::class))->newLazyGhost(
            function (A $object) {
                $object->__construct(0);
            }
        )
    );
}

echo 'After create: ' . memory_get_usage(true) / 1_000_000 . PHP_EOL;

foreach($arr as $obj) {
    $obj->incNumb();
}

echo 'After increment: ' . memory_get_usage(true) / 1_000_000 . PHP_EOL;
