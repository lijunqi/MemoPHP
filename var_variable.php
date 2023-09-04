<?php

/*
 * Variable variables
 * 在 PHP 的函数和类的方法中，超全局变量 $GLOBALS 不能用作可变变量。$this 变量也是一个特殊变量，不能被动态引用
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


$var = 'Hello';
$$var = 'world!';
echo $Hello;
echo $$var === $Hello;