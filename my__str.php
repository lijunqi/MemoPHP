<?php

// Trim
$str = ',asdf,';
echo $str[-1]."\n";
$a = rtrim($str, ',');
echo 'a = '.$a."\n";
echo 's = '.$str."\n";

$b = ltrim($str, ',');
echo 'b = '.$b."\n";
echo 's = '.$str."\n";

$c = trim($str, ',');
echo 'c = '.$c."\n";
echo 's = '.$str."\n";

//
