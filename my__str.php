<?php

// * Trim
$str = ',asdf,';
echo $str[-1]."\n";
$a = rtrim($str, ',');
echo 'a = '.$a."---\n";
echo 's = '.$str."\n";

$b = ltrim($str, ',');
echo 'b = '.$b."---\n";
echo 's = '.$str."\n";

$c = trim($str, ',');
echo 'c = '.$c."---\n";
echo 's = '.$str."\n";

$d = trim(",", ",");
echo 'd = '.$d.'--- len = '.strlen($d)."\n";

$e = trim("", ",");
echo 'e = '.$e.'--- len = '.strlen($e)."\n";

$f = trim(" ,qq,we are good ,  , ", ", ");
echo 'f = '.$f.'--- len = '.strlen($f)."\n";
//

// * Replace
$str = "Hello world";
$new = str_replace("world", "Jacky", $str);
echo "New str: $new\n";
