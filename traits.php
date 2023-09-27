<?php
/*
 * Traits are essentially language assisted copy and paste.
 *   When you write use SomeTrait; in PHP you are (effectively) telling the compiler to
 *   copy and paste the code from the Trait into the class where it's being used.
 * 
 * Traits are simply a method for re-using code.
 * Interfaces should not be thought of as a mutually exclusive alternative to traits.
 * In fact, creating traits that fulfill the capabilities required by an interface is the ideal use case.
 * 
 * trait 必须实现方法体 ， interface 不能实现方法体。
 * trait 可以预定义类成员，但是成员不能被调用者覆盖，必须有相同的初始化参数。
 * interface 不允许预定义成员。
 * 一个类可以实现多个 interface ，也可以使用多个 trait 。从另一个角度来讲，trait 是为了来解决不能多继承的。
 * 
 * interface是class的一个约束条件，指定某个class必须实现哪些方法，但不需要定义这些方法的具体内容。
 * trait出现的比interface要晚，官方定义是：自 PHP5.4.0 起，PHP 实现了一种代码复用的方法，称为 trait。
 * Trait 是为类似 PHP 的单继承语言而准备的一种代码复用机制。
 * Trait 为了减少单继承语言的限制，使开发人员能够自由地在不同层次结构内独立的类中复用 method。
 * Trait 和 Class 组合的语义定义了一种减少复杂性的方式，避免传统多继承和 Mixin 类相关典型问题。

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
