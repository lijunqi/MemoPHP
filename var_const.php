<?php
/*
 * 1. 常量命名的前面没有美元符号 $ 修饰符；
 * 2. 常量只能用 define 函数和 const 关键字定义；
 * 3. 常量一旦定义就不能被重新定义或者取消定义；
 * 4. 常量的值只能是标量（数值或者字符串）
 * 5. 变量可以通过 unset () 销毁，常量不能被销毁
*/

// 1. 合法的常量名。
//    布尔值代表的是常量名是否大小写敏感（默认为 false），true: 不敏感，false: 敏感
define("FOO", "something", false);

define("FOO2", "something else");

define("FOO_BAR", "something more");

// 2. 非法的常量名。
define("2FOO", "something");

// 3. 下面的定义是合法的，但应该避免这样做(自定义常量不要以双下划线 __ 开头)：
// 也许将来有一天 PHP 会定义一个 __FOO__ 的魔术常量，
// 这样就会与你的代码相冲突。
define("__FOO__", "something");

// 4. 在类中不能使用 define 定义常量。
// class MyClass {
//     define("FOO3", "something"); // Error Line
// }


// * const 常量名 = 常量值;
class MyClass
{
    const CONSTANT = '我是一个常量';
}

echo MyClass::CONSTANT;