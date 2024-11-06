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

$g = trim("   asdf    "); // default trim space
echo 'g = '.$g.'--- len = '.strlen($g)."\n";
//

// * Empty
echo "This is empty: ";
var_dump(empty(""))."\n";
echo "A is empty: ";
var_dump(empty("A"))."\n";

// * str_contains
if (str_contains("abc:edf", ":"))
{
    echo "1. Contain\n";
}

if (!str_contains("abc:edf", ","))
{
    echo "2. Not contain\n";
}

$s = "asdfqwer";
if (str_contains($s, 'fq'))
{
    echo "Contains: fq\n";
}
else
{
    echo "Not Contains: fq\n";
}

if (str_contains($s, strtolower('FQ')))
{
    echo "Contains: FQ\n";
}
else
{
    echo "Not Contains: FQ\n";
}

// * strpos
$a = "A B C*D E F A";
$pos = strpos($a, "*D");
echo "pos type: ".gettype($pos).", pos = $pos"."\n";

$pos = strpos($a, "Z");
echo "pos type: ".gettype($pos).", pos = $pos"."\n";

$pos = strpos($a, "A");
echo "pos type: ".gettype($pos).", pos = $pos"."\n";

// * startswith
$string = 'The lazy fox jumped over the fence';

if (str_starts_with($string, 'The')) {
    echo "The string starts with 'The'\n";
}

if (str_starts_with($string, 'the')) {
    echo 'The string starts with "the"';
} else {
    echo '"the" was not found because the case does not match';
}

