<?php

function print_is_object($p)
{
    if (is_object($p))
    {
        echo $p." is object.";
    }
    else
    {
        echo $p." NOT object.";
    }
}

$a = 0;
print_is_object($a); // NO

$b = [1,2,3];
print_is_object($b); // NO

class C {}
$c = new C();
print_is_object($c); // NO
