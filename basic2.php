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


/*
 * Variable variables
 */
echo "========= Variable variables =========\n";
$hello = 'world';
$world = 'hello';

// PHP 會把 ${$world} 的值拿出來替換，因此變數成為 $hello，所以 output就是 'world' 字串
echo $$world . "\n"; //output: world

class Foo
{
    public static $fun = 'static property';
    public static function fun()
    {
        echo 'Method fun called' . "\n";
    }
    public function hello()
    {
        echo 'Hello world!' . "\n";
    }
}

echo Foo::$fun . "\n"; // This prints 'static property'. It does need a $fun in this scope.
$fun = 'fun';
Foo::$fun();  // This calls $foo->fun() reading $fun in this scope.
Foo::{'fun'}();

?>