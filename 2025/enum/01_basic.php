<?php

declare(strict_types=1);

enum E
{
    case one;
    case two;
}

var_dump(E::one->name);  // one