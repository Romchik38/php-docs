<?php

declare(strict_types=1);

$result = match('1') {
    1.0 => 'float',
    1 => 'int',
    '1' => 'string',
};

var_dump($result); //  string

switch('1') {
    case 1.0:
        $result = 'float';
        break;
    case 1:
        $result = 'int';
        break;
    case '1':
        $result = 'string';
        break;
};

var_dump($result); //  float
