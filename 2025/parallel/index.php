<?php

echo 'Parallel example' . PHP_EOL;

$tStart = microtime(true);

$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();
$future1  = $runtime1->run(function(){
    echo 'start 1' . PHP_EOL;
    sleep(10);
    return 1;
});

$future2  = $runtime2->run(function(){
    echo 'start 2' . PHP_EOL;
    sleep(10);
    return 2;
});

echo 'main start' . PHP_EOL;
sleep(10);
echo 'main end' . PHP_EOL;

printf("Result 1, %s\n", $future1->value());
printf("Result 2, %s\n", $future2->value());


$tEnd = microtime(true);

echo ($tStart - $tEnd) . PHP_EOL;
