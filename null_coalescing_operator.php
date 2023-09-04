<?php

$a = 1;
echo $a > 0 && print_r("yes");
echo "\n";

/*
 * null coalescing operator:
 * It returns its first operand if it EXISTS and NOT NULL; otherwise it returns its second operand.
 */
echo "========= Null coalescing operator =========\n";
// * Those two are equivalent:
$foo1 = $bar ?? 'something';
echo "foo1: ".$foo1."\n";

$bar = null;
$foo2 = isset($bar) ? $bar : 'something';
echo "foo2: ".$foo2."\n";

$bar = "";
$foo3 = $bar ?? 'something';
echo "foo3: ".$foo3."\n";

$bar = false;
$foo4 = $bar ?? 'something';
echo "foo4: ".$foo4."\n";

$bar = 123;
$foo5 = $bar ?? 'something';
echo "foo5: ".$foo5."\n";

$a = null;
if (isset($a))
{
    echo "is set\n";
}
else {
    echo "not set\n";
}

?>