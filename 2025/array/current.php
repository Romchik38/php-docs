<?php

declare(strict_types=1);

$arr = [10, 20, 30, 40, 50, 60];

foreach($arr as $val){
    if ($val === 30) {
        break;
    }
}

$c = current($arr);
var_dump($c);

next($arr);

$c = current($arr);
var_dump($c);

