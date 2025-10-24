<?php

declare(strict_types=1);

// UNION
function union(bool|string $param): void {
}

// INTERSECTION 
interface A{}

interface B{}

class C implements A, B {
    public function __construct() {
    }
}

function intersection(A&B $param): void {
}