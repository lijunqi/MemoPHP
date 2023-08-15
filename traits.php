<?php
/*
 * Traits are essentially language assisted copy and paste.
 *   When you write use SomeTrait; in PHP you are (effectively) telling the compiler to
 *   copy and paste the code from the Trait into the class where it's being used.
 * 
 * Traits are simply a method for re-using code.
 * Interfaces should not be thought of as a mutually exclusive alternative to traits.
 * In fact, creating traits that fulfill the capabilities required by an interface is the ideal use case.
 */

// An inherited method from a base class is overridden by the method inserted into A1 from the SayWorld Trait. 
trait SayWorld
{
    public function sayHello() {
        parent::sayHello();
        echo "World!\n";
    }
}

class Base
{
    public function sayHello() {
        echo 'Hello ';
    }
}

class A1 extends Base {
    use SayWorld;
}

class B1 extends A1 {}

class C1 extends Base {}

$a = new A1();
$a->sayHello(); // Hello World!

$b = new B1();
$b->sayHello(); // Hello World!

$c = new C1();
$c->sayHello(); // Hello


echo "\n========= Alternate Precedence Order =========\n";
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

class TheWorldIsNotEnough {
    use HelloWorld;
    public function sayHello() {
        echo 'Hello Universe!';
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello(); // Hello Universe!


echo "\n========= Conflict Resolution =========\n";
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}
$t = new Talker();
$t->smallTalk();
$t->bigTalk();
echo "\n";

$at = new Aliased_Talker();
$at->smallTalk();
$at->bigTalk(); // A::bigTalk
$at->talk(); // B::bigTalk
