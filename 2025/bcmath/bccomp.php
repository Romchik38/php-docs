<?php

declare(strict_types=1);

$a = 0.1;
$b = 0.2;

$s1 = $a + $b;
$s2 = (float)bcadd((string)$a, (string)$b, 1); 

var_dump($s1);
var_dump($s2);
var_dump($s1 === $s2);
var_dump(bccomp((string)$s1, (string)$s2), 1);