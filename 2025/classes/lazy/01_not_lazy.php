<?php

declare(strict_types=1);

class A
{
    public string $data;

    public function __construct(
        public int $numb
    ) {
        $fp = fopen(__FILE__, 'r');
        $this->data = fread($fp, 1024);
        fclose($fp);
    }
}

echo 'Before create: ' . memory_get_usage(true) / 1_000_000 . PHP_EOL;

$arr = new SplFixedArray(1_000_0);

for ($i = 0; $i < 1_000_0; $i++) {
    $arr[$i] = new A(0);
}

echo 'After create: ' . memory_get_usage(true) / 1_000_000 . PHP_EOL;

foreach($arr as $obj) {
    $obj->data;
}

echo 'After data access: ' . memory_get_usage(true) / 1_000_000 . PHP_EOL;

// Before create: 2.097152
// After create: 14.680064
// After data access: 14.680064