<?php

enum E: string
{
    case one = '1';
    case two = '2';
}

var_dump(E::one);
var_dump(E::one->name);
var_dump(E::one->value);