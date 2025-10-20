<?php

declare(strict_types=1);

$a = [1, 2];
$b = [1, '2'];
$c = [1, 2];

var_dump($a == $b);
var_dump($a === $b);
var_dump($a === $c);