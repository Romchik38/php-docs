<?php

declare(strict_types=1);

$arr1 = [10, 20, 30];
$arr2 = [40, 50, 60];

var_dump(array_merge($arr1, $arr2));  

//   [0]=>
//   int(10)
//   [1]=>
//   int(20)
//   [2]=>
//   int(30)
//   [3]=>
//   int(40)
//   [4]=>
//   int(50)
//   [5]=>
//   int(60)

var_dump($arr1 + $arr2);

//   [0]=>
//   int(10)
//   [1]=>
//   int(20)
//   [2]=>
//   int(30)