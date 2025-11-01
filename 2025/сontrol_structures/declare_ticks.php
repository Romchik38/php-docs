<?php

declare(ticks=1);

$fp = fopen(__DIR__ . '/.mem_usage', 'w');

$tick_handler = function() use ($fp) 
{
    if (gettype($fp) === 'resource') {
        $line = memory_get_usage(true) / 1_000_000 . PHP_EOL;
        fwrite($fp, $line);
    }
};

register_tick_function($tick_handler);

$a = [1];

$b = array_fill(1, 1000000, 0);

$c = $a + $b;

fclose($fp);