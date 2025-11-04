<?php

enum E: string
{
    case one = '1';
    case two = '2';
}

var_dump(E::from(2)); // num(E::two)
