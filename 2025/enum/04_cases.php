<?php

enum E: string
{
    case one = '1';
    case two = '2';
}

var_dump(E::cases()); 

//        array(2) {
//          [0]=>
//          enum(E::one)
//          [1]=>
//          enum(E::two)
//        }