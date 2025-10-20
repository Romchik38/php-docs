<?php

declare(strict_types=1);

$arr = [10, 5, 100];

$arr[-10] = 'string-10';
$arr[-1] = 'string-1';

foreach ($arr as $val) {
    echo "$val\n";
}
