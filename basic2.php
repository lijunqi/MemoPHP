<?php
$a = 1;
if (!$a) {
    echo "Yes\n";
}
else {
    echo "No\n";
}

$a = 0;
echo $a > 0 && print_r("yes");

/*
 * null coalescing operator:
 * It returns its first operand if it EXISTS and NOT NULL; otherwise it returns its second operand.
 */
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
    echo "a is set\n";
}
else {
    echo "a not set\n";
}

$content = "asdf";
$content .= "|".$a;
echo $content."\n";

echo "Split A_B_C_D, max=3\n";
list($first, $second, $third) = explode("_", "A_B_C_D", 3);
echo "1st is - ".$first."\n";
echo "2nd is - ".$second."\n";
echo "3rd is - ".$third."\n";
echo "\n";

echo "Split A_B_C_D, no max\n";
list($first, $second, $third) = explode("_", "A_B_C_D");
echo "1st is - ".$first."\n";
echo "2nd is - ".$second."\n";
echo "3rd is - ".$third."\n";

?>