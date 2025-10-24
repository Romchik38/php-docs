<?php

declare(strict_types=1);

$logError = function(string $err): never {
    echo sprintf('do log %s%s', $err, PHP_EOL);
    exit();
};

try {
    $a = rand(1,2);
    if ($a === 1) {
        throw new Exception('some_error_a_equal_1');
    }
} catch(\Exception $e) {
    $logError($e->getMessage());
}

echo 'No Error now' . PHP_EOL;