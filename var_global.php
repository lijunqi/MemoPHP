<?php

$var = '这是一个全局变量';

function foo1()
{
    global $var;
    echo "使用关键词 global 输出 \$var 的值为：$var\n";
}

function foo2()
{
    echo "使用超全局变量 \$GLOBALS 输出 \$var 的值为：{$GLOBALS['var']}\n";
}

function foo3()
{
    echo "This is local var = ".$var."\n";
}

foo1();
foo2();