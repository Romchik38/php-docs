<?php

class Foo
{
    function __construct()
    {
        (static function () {
            var_dump($this);
        })();
    }
};

new Foo();  // PHP Fatal error:  Uncaught Error: Using $this when not in object contex
