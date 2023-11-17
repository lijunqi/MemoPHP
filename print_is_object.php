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
print_is_object($a);
