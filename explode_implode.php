<?php

# explode == split,   implode == join

$a = "";
$a_array = explode(",", $a);
print_r($a_array);
echo "a_array len = ".count($a_array)."\n";

$b = ",a,b,c,";
$b_array = explode(",", $b);
print_r($b_array);
echo "b_array len = ".count($b_array)."\n";

$c = ",";
$c_array = explode(",", $c);
print_r($c_array);
echo "c_array len = ".count($c_array)."\n";

$d = "asdf";
$d_array = explode(":", $d);
print_r($d_array);
echo "d_array len = ".count($d_array)."\n";

$e = 'powershell -a "a 1" -b "23"';
$e_array = explode(" -", $e);
print_r($e_array);
echo "e_array len = ".count($e_array)."\n";
