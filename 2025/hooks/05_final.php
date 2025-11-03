<?php

declare(strict_types=1);

class A
{
    public int $numb {
        final get {
            return 1;
        }
    }    
}

class B extends A
{
    public int $numb {
        final get {
            return 2;
        }
    }
    
}

$b1 = new B;   //   Fatal error:  Cannot override final property hook A::$numb::get()

