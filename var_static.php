<?php
/*
 ! Static properties are accessed using the Scope Resolution Operator (::) and CANNOT be accessed through the object operator (->).
*/

// ! Outside of classes (ie: in functions), a static variable is a variable that doesn't lose its value when the function exits.
function test()
{
    static $a = 0;
    echo "static a = $a\n";
    $a++;
}

test();  // prints 0
test();  // prints 1
test();  // prints 2
echo "=========\n";


// ! 
class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}


print Foo::$my_static . "\n";

$foo = new Foo();
print $foo->staticValue() . "\n";
print $foo->my_static . "\n";      // xxx Undefined "Property" my_static

print $foo::$my_static . "\n"; // an instantiated object belonging to the class can access a static method.
$classname = 'Foo';
print 'aaa '.$classname::$my_static . "\n";

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";
