<?php

$arr = array(
    'a' => 1,
    'b' => 2,
    'c' => 3
);

$j1 = json_encode($arr);

echo "j1 type: ".gettype($j1)."\n";
echo "j1: ".$j1."\n";

$j2 = json_encode($arr, JSON_PRETTY_PRINT);
echo "j2 type: ".gettype($j2)."\n";
echo "j2: ".$j2."\n";

$arr2 = $arr;
$arr2['a'] = 4;
echo "arr = \n";
print_r($arr);
echo "arr2 = \n";
print_r($arr2);

// * unserialize
//$un_arr = unserialize('');
//echo gettype($un_arr);
//print_r($un_arr);
